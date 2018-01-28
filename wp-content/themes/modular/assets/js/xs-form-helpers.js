/**
 * FW_Form helpers for Contact ar
 * Dependencies: jQuery
 * Note: You can include this script in frontend (for e.g. to make you contact forms ajax submittable)
 */

var fwForm = {
    /**
     * Make forms ajax submittable
     * @param X S {Object} [opts] You can overwrite any. 
     */
    initAjaxSubmit: function ( opts ) {
        var opts = jQuery.extend( {
            selector: 'form[data-fw-form-id]',
            ajaxUrl: ( typeof ajaxurl == 'undefined' ) ? 'wp-admin/admin-ajax.php' : ajaxurl,
            loading: function ( elements, show ) {
                elements.jQueryform.css( 'position', 'relative' );
                elements.jQueryform.find( '> .fw-form-loading' ).remove();

                if ( show ) {
                    elements.jQueryform.append(
                        '<div' +
                        ' class="fw-form-loading"' +
                        ' style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255,255,255,0.1);"' +
                        '></div>'
                        );
                }
            },
            onErrors: function ( elements, data ) {
                if ( isAdmin ) {
                    fwForm.backend.showFlashMessages(
                        fwForm.backend.renderFlashMessages( { error: data.errors } )
                        );
                } else {
                    // Frontend
                    jQuery.each( data.errors, function ( inputName, message ) {
                        var jQueryinput = elements.jQueryform.find( '[name="' + inputName + '"]' ).last();
                        message = '<p class="form-error" style="color: #9b2922;">{message}</p>'.replace( '{message}', message );

                        if ( jQueryinput.length ) {
                            // error message under input
                            jQueryinput.parent().after( message );
                        } else {
                            // if input not found, show message in form
                            elements.jQueryform.prepend( message );
                        }
                    } );
                }
            },
            hideErrors: function ( elements ) {
                elements.jQueryform.find( '.form-error' ).remove();
            },
            onAjaxError: function ( elements, data ) {
                console.error( data.jqXHR, data.textStatus, data.errorThrown );
                alert( 'Ajax error (more details in console)' );
            },
            onSuccess: function ( elements, ajaxData ) {
                if ( isAdmin ) {
                    fwForm.backend.showFlashMessages(
                        fwForm.backend.renderFlashMessages( ajaxData.flash_messages )
                        );
                } else {
                    var html = fwForm.frontend.renderFlashMessages( ajaxData.flash_messages );

                    if ( !html.length ) {
                        html = '<p>Success</p>';
                    }

                    elements.jQueryform.fadeOut( function () {
                        elements.jQueryform.html( html ).fadeIn();
                    } );

                    // prevent multiple submit
                    elements.jQueryform.on( 'submit', function ( e ) {
                        e.preventDefault();
                        e.stopPropagation();
                    } );
                }
            }
        }, opts || { } ),
            isAdmin = ( typeof adminpage != 'undefined' && jQuery( document.body ).hasClass( 'wp-admin' ) ),
            isBusy = false;

        jQuery( document.body ).on( 'submit', opts.selector, function ( e ) {
            e.preventDefault();

            if ( isBusy ) {
                console.warn( 'Working... Try again later.' )
                return;
            }

            var jQueryform = jQuery( this );

            if ( !jQueryform.is( 'form[data-fw-form-id]' ) ) {
                console.error( 'This is not a FW_Form' );
                return;
            }

            // get submit button
            {
                var jQuerysubmitButton = jQueryform.find( 'input[type="submit"][name]:focus' )

                if ( !jQuerysubmitButton.length ) {
                    // in case you use this solution http://stackoverflow.com/a/5721762
                    jQuerysubmitButton = jQueryform.find( 'input[type="submit"][name][clicked]' );
                }

                // make sure to remove the "clicked" attribute to prevent accidental settings reset
                jQueryform.find( 'input[type="submit"][name][clicked]' ).removeAttr( 'clicked' );
            }

            var elements = {
                jQueryform: jQueryform,
                jQuerysubmitButton: jQuerysubmitButton
            };

            opts.hideErrors( elements );
            opts.loading( elements, true );
            isBusy = true;

            jQuery.ajax( {
                type: "POST",
                url: opts.ajaxUrl,
                data: jQueryform.serialize() + ( jQuerysubmitButton.length ? '&' + jQuerysubmitButton.attr( 'name' ) + '=' + jQuerysubmitButton.attr( 'value' ) : '' ),
                dataType: 'json'
            } ).done( function ( r ) {
                isBusy = false;
                opts.loading( elements, false );

                if ( r.success ) {
                    opts.onSuccess( elements, r.data );
                } else {
                    opts.onErrors( elements, r.data );
                }
            } ).fail( function ( jqXHR, textStatus, errorThrown ) {
                isBusy = false;
                opts.loading( elements, false );
                opts.onAjaxError( elements, {
                    jqXHR: jqXHR,
                    textStatus: textStatus,
                    errorThrown: errorThrown
                } );
            } );
        } );
    },
    backend: {
        showFlashMessages: function ( messagesHtml ) {
            var jQuerypageTitle = jQuery( '.wrap h2:first' );

            while ( jQuerypageTitle.next().is( '.fw-flash-messages, .fw-flash-message, .updated, .update-nag, .error' ) ) {
                jQuerypageTitle.next().remove();
            }

            jQuerypageTitle.after( '<div class="fw-flash-messages">' + messagesHtml + '</div>' );

            jQuery( document.body ).animate( { scrollTop: 0 }, 300 );
        },
        /**
         * Html structure should be the same as generated by FW_Flash_Messages::_print_backend()
         * @param {Object} flashMessages
         * @returns {string}
         */
        renderFlashMessages: function ( flashMessages ) {
            var html = [ ],
                typeHtml = [ ],
                messageClass = '';

            jQuery.each( flashMessages, function ( type, messages ) {
                typeHtml = [ ];

                switch ( type ) {
                    case 'error':
                        messageClass = 'error';
                        break;
                    case 'warning':
                        messageClass = 'update-nag';
                        break;
                    default:
                        messageClass = 'updated';
                }

                jQuery.each( messages, function ( messageId, message ) {
                    typeHtml.push( '<div class="' + messageClass + ' fw-flash-message"><p>' + message + '</p></div>' );
                } );

                if ( typeHtml.length ) {
                    html.push(
                        '<div class="fw-flash-type-' + type + '">' + typeHtml.join( '</div><div class="fw-flash-type-' + type + '">' ) + '</div>'
                        );
                }
            } );

            return html.join( '' );
        }
    },
    frontend: {
        /**
         * Html structure is the same as generated by FW_Flash_Messages::_print_frontend()
         * @param {Object} flashMessages
         * @returns {string}
         */
        renderFlashMessages: function ( flashMessages ) {
            var html = [ ],
                typeHtml = [ ],
                messageClass = '';

            jQuery.each( flashMessages, function ( type, messages ) {
                typeHtml = [ ];

                jQuery.each( messages, function ( messageId, message ) {
                    typeHtml.push( '<li class="fw-flash-message">' + message + '</li>' );
                } );

                if ( typeHtml.length ) {
                    html.push(
                        '<ul class="fw-flash-type-' + type + '">' + typeHtml.join( '</ul><ul class="fw-flash-type-' + type + '">' ) + '</ul>'
                        );
                }
            } );

            return html.join( '' );
        }
    }
};

// Usage example
if ( false ) {
    jQuery( function ( jQuery ) {
        fwForm.initAjaxSubmit( {
            selector: 'form[data-fw-form-id][data-fw-ext-forms-type="contact-forms"]',
            ajaxUrl: ajaxurl
        } );
    } );
}



    var checkXsIsMobile = {
        iOS: function () {
            return navigator.userAgent.match( /iPhone|iPad|iPod/i );
        }
    };
    if ( checkXsIsMobile.iOS() ) {
        //jQuery( '.parallax-section' ).css( 'background-attachment', 'scroll' );
    };