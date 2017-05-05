/*!
 * jigl v1.3.16 https://github.com/0xKione/jquery-input-grid)
 * Copyright (c) 2015 Rich Gomez
 * Licensed under the MIT license (https://github.com/0xKione/jquery-input-grid/blob/master/LICENSE)
 */

// Array.find() Polyfill
if (!Array.prototype.find) {
    Array.prototype.find = function(predicate) {
        if (this === null) {
            throw new TypeError('Array.prototype.find called on null or undefined');
        }
        if (typeof predicate !== 'function') {
            throw new TypeError('predicate must be a function');
        }
        var list = Object(this);
        var length = list.length >>> 0;
        var thisArg = arguments[1];
        var value;

        for (var i = 0; i < length; i++) {
            value = list[i];
            if (predicate.call(thisArg, value, i, list)) {
                return value;
            }
        }
        return undefined;
    };
}

// jQuery.smartResize Polyfill
(function($, sr) {
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function(func, threshold, execAsap) {
        var timeout;

        return function debounced() {
            var obj = this, args = arguments;
            function delayed() {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null;
            };

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100);
        };
    }
    // smartResize 
    jQuery.fn[sr] = function(fn) { return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery, 'smartResize');

var Jigl = function() {
    // Private Variables
    var _selectOrigVal = "";
    var _rangeMinOrigVal = 0;
    var _rangeMaxOrigVal = -1;
    var _resizeTimerId;
    var _resetSelector = false;
    var _invalidateCounter = 0;
    var _dateResetSelector = false;

    // Private Functions
    var showSelect = function(containerParentTag, resetValue) {
        var dropdownTag = $(containerParentTag).find('.jigl-select-dropdown');
        if (dropdownTag.height() >= dropdownTag.css('max-height').replace(/[^-\d\.]/g, '')) {
            dropdownTag.width(dropdownTag.width() + 20);
        }
        dropdownTag.show();

        $(containerParentTag).find('.jigl-dropdown-arrow > i').removeClass('fa-caret-down').addClass('fa-caret-up');

        var inputVal = $(containerParentTag).find('.jigl-field > div').text();

        // Find the element whose text matches the already selected one
        var selectedOption = $(containerParentTag).find('.jigl-option').get().find(function(element, index, array) {
            return $(element).text() == inputVal;
        });

        if (selectedOption) {
            $(selectedOption).addClass('jigl-option-selected');
            dropdownTag.scrollTop(selectedOption.offsetTop);
        }

        // Record the original value of the input field in case the user cancels
        _selectOrigVal = inputVal;

        if (resetValue) {
            $(containerParentTag).find('.jigl-field > div').text("");
            $(containerParentTag).find('.jigl-option').each(function(index, element) {
                $(element).show();
            });
        }
    };

    var hideSelect = function(containerParentTag, valueSelected) {
        var dropdownTag = $(containerParentTag).find('.jigl-select-dropdown');
        $(containerParentTag).find('.jigl-dropdown-arrow > i').addClass('fa-caret-down').removeClass('fa-caret-up');
        $(containerParentTag).find('.jigl-option-selected').removeClass('jigl-option-selected');

        if (dropdownTag.height() >= dropdownTag.css('max-height').replace(/[^-\d\.]/g, '')) {
            dropdownTag.width(dropdownTag.width() - 20);
        }
        dropdownTag.hide();

        // Set the input field back to its original value if the user didn't select one
        if (!valueSelected) {
            $(containerParentTag).find('.jigl-field > div').html(_selectOrigVal);
        }

        _selectOrigVal = "";
    };

    var showAutocomplete = function(containerParentTag) {
        var dropdownTag = $(containerParentTag).find('.jigl-autocomplete-dropdown');
        if (dropdownTag.height() >= dropdownTag.css('max-height').replace(/[^-\d\.]/g, '')) {
            dropdownTag.width(dropdownTag.width() + 20);
        }

        var value = $(containerParentTag).data().text().trim();
        var visibleOptions = 0;

        // Set visible
        dropdownTag.find('.jigl-option').each(function(index) {
            $(this).hide();
            if ($(this).text().trim().toLowerCase().startsWith(value)) {
                $(this).show();
                ++visibleOptions;
            }
        });

        if (visibleOptions == 0)
            return;
        
        dropdownTag.show();

        if ($(containerParentTag).hasClass('jigl-top-right') || $(containerParentTag).hasClass('jigl-middle-right') || $(containerParentTag).hasClass('jigl-bottom-right')) {
            $(containerParentTag).css('overflow', 'initial');
            $(containerParentTag).css('float', 'right');
            $(containerParentTag).css('z-index', '1000');
            _resetSelector = true;
        }
    };

    var hideAutocomplete = function(containerParentTag) {
        var dropdownTag = $(containerParentTag).find('.jigl-autocomplete-dropdown');
        $(containerParentTag).find('.jigl-dropdown-arrow > i').addClass('fa-caret-down').removeClass('fa-caret-up');
        $(containerParentTag).find('.jigl-option-selected').removeClass('jigl-option-selected');

        if (dropdownTag.height() >= dropdownTag.css('max-height').replace(/[^-\d\.]/g, '')) {
            dropdownTag.width(dropdownTag.width() - 20);
        }
        dropdownTag.hide();

        if (_resetSelector) {
            $(containerParentTag).css('overflow', '');
            $(containerParentTag).css('float', '');
            $(containerParentTag).css('z-index', '');
            _resetSelector = false;
        }
    };

    var showRange = function(containerParentTag) {
        $(containerParentTag).find('.jigl-range-dropdown').show();
        $(containerParentTag).find('.jigl-dropdown-arrow > i').removeClass('fa-caret-down').addClass('fa-caret-up');
    };

    var hideRange = function(containerParentTag) {
        $(containerParentTag).find('.jigl-dropdown-arrow > i').addClass('fa-caret-down').removeClass('fa-caret-up');
        $(containerParentTag).find('.jigl-option-selected').removeClass('jigl-option-selected');
        $(containerParentTag).find('.jigl-range-dropdown').hide();

        var minSpanTag = $(containerParentTag).find('span.jigl-range-min');
        var maxSpanTag = $(containerParentTag).find('span.jigl-range-max');
        var minInputTag = $(containerParentTag).find('input.jigl-range-min');
        var maxInputTag = $(containerParentTag).find('input.jigl-range-max');

        // If the user didn't fill in a min value, set it to the original amount
        if (minInputTag.val().length <= 1) {
            minInputTag.val(minSpanTag.html());
        } else {
            minSpanTag.html(minInputTag.val());
        }

        // If the user didn't fill in a max value, set it to the original amount
        if (maxInputTag.val().length <= 1) {
            maxInputTag.val(maxSpanTag.html());
        } else {
            maxSpanTag.html(maxInputTag.val());
        }
    };

    var setUpEvents = function(parentTagSelector) {
        var overAutocompleteDropdown = false;

        if (!parentTagSelector) {
            parentTagSelector = 'body';
        }

        // HACK: Handle autocomplete by rechecking all fields in form
        $(parentTagSelector).find('.jigl-text .jigl-field').on('blur', function(event) {
            event.preventDefault();

            $(this).parents('form').find('.jigl-text .jigl-field, .jigl-autocomplete .jigl-field').keyup();
        });

        $(parentTagSelector).find('.jigl-field, .jigl-autocomplete, .jigl-select, .jigl-range').on('focus', function(event) {
            event.preventDefault();

            var inputTag = [];
            if ($(this).hasClass('jigl-field')) {
                inputTag = $(this).parents('.jigl');
            } else {
                inputTag = $(this);
            }
            
            if (inputTag.find('.jigl-hint').is(':visible')) {
                inputTag.find('.jigl-hint').hide(100);
            }

            var infoTag = inputTag.find('.jigl-info');

            if (infoTag.length > 0) {
                if (infoTag.hasClass('jigl-error'))
                    infoTag.removeClass('jigl-error');
                if (infoTag.hasClass('jigl-okay'))
                    infoTag.removeClass('jigl-okay');
                infoTag.html("");
            }

            inputTag.removeClass('jigl-hover');

            if (inputTag.hasClass('jigl-invalid'))
                inputTag.removeClass('jigl-invalid');
            
            if (!inputTag.hasClass('jigl-disabled'))
                inputTag.addClass('jigl-focus');

            markValidated(inputTag);

            if ($(this).parents('.jigl').hasClass('jigl-autocomplete')) {
                if (!overAutocompleteDropdown)
                    showAutocomplete($(this).parents('.jigl'));
            }
        });

        $(parentTagSelector).find('.jigl-field, .jigl-select, .jigl-range').on('keyup', function(event, data) {
            event.preventDefault();

            var inputTag = fieldTag = [];
            var isRangeInput = false;
            if ($(this).hasClass('jigl-field')) {
                inputTag = $(this).parents('.jigl');
                fieldTagValue = $(this).val();
            } else if ($(this).hasClass('jigl-select')) {
                inputTag = $(this);
                fieldTagValue = $(this).find('.jigl-field > div').text().trim();
            } else {
                isRangeInput = true;
                inputTag = $(this);
                fieldTagValue = ($(this).find('input.jigl-range-min').val() != "" || $(this).find('input.jigl-range-max').val()) ? { "min": $(this).find('input.jigl-range-min').val(), "max": $(this).find('input.jigl-range-max').val() } : null;
            }

            var infoTag = inputTag.find('.jigl-info');

            if (infoTag.length > 0 && !inputTag.hasClass('jigl-no-valid')) {
                var inputOK = false;

                if (inputTag.data().validate) {
                    inputOK = inputTag.data().validate(fieldTagValue);
                    inputTag.data().valid = inputOK;
                } else {
                    inputOK = fieldTagValue != "" || (isRangeInput && fieldTagValue != null);
                    inputTag.data().valid = inputOK;
                }

                if (inputOK) {
                    infoTag.removeClass('jigl-error');
                    infoTag.addClass('jigl-okay');
                    markValidated(inputTag);
                } else {
                    var markInvald = data && data.markInvalid;
                    infoTag.removeClass('jigl-okay');
                    infoTag.addClass('jigl-error');
                    markValidated(inputTag, markInvald);
                }
            } else {
                inputTag.data().valid = true;
            }
        });

        $(parentTagSelector).find('.jigl-field, .jigl-select, .jigl-range').on('blur', function(event) {
            event.preventDefault();

            var inputTag = [];
            if ($(this).hasClass('jigl-field')) {
                inputTag = $(this).parents('.jigl');
            } else if ($(this).hasClass('jigl-select')) {
                inputTag = $(this);
            } else {
                inputTag = $(this);
            }

            $(this).keyup();

            if (inputTag.find('.jigl-info').hasClass('jigl-error')) {
                inputTag.find('.jigl-hint').show(100);
                setTimeout(function() { inputTag.find('.jigl-hint').hide(100); }, 7000);
            } else {
                inputTag.find('.jigl-hint').hide(100);
            }

            inputTag.removeClass('jigl-focus');
        });

        // Set up hover events for inputs that require it
        $(parentTagSelector).find('.jigl').on('mouseover', function(event) {
            if (!$(this).hasClass('jigl-focus') && !$(this).hasClass('jigl-disabled'))
                $(this).addClass('jigl-hover');
        });

        $(parentTagSelector).find('.jigl').on('mouseleave', function(event) {
            $(this).removeClass('jigl-hover');
        });

        $(parentTagSelector).find('.jigl-text, .jigl-autocomplete').on('click', function(event) {
            $(this).find('.jigl-field').focus();
        });

        $(parentTagSelector).find('.jigl-autocomplete .jigl-field').on('blur', function(event) {
            if ($(this).parents('.jigl').find('.jigl-autocomplete-dropdown').is(':visible')) {
                if (!overAutocompleteDropdown)
                    hideAutocomplete($(this).parents('.jigl'));
            }
        });

        $(parentTagSelector).find('.jigl-select, .jigl-autocomplete').on('keydown', function(event) {
            var isSelect = $(this).hasClass('jigl-select');

            var dropdownPanelTag = isSelect ? $(this).find('.jigl-select-dropdown') : $(this).find('.jigl-autocomplete-dropdown');
            var dropdownOptions = dropdownPanelTag.find('.jigl-option');

            if ($(this).hasClass('jigl-disabled')) {
                return;
            }

            // If the dropdown is not visible, show it
            if (!dropdownPanelTag.is(':visible')) {
                if (dropdownOptions.length > 0) {
                    if (isSelect) {
                        showSelect(this, true);
                    } else {
                        showAutocomplete(this);
                    }
                }
            }

            var inputTag = $(this).find('input');
            var fieldTag = $(this).find('.jigl-field');

            var keyCode = event.keyCode;

            // If the input isn't a letter, the backspace key, or the spacebar
            var key = "";

            if (/[a-zA-Z ]/.test(String.fromCharCode(keyCode)))
                key = event.key;

            if (key == "" && keyCode != 8) {
                return;
            }

            var inputVal = isSelect ? fieldTag.find('div').text() : inputTag.val();
            if (key != "") {
                inputVal = (inputVal + key);
            } else if (keyCode == 8) {
                if (inputVal.length > 0)
                    inputVal = inputVal.substr(0, inputVal.length - 1);
            }

            inputVal = inputVal.toLowerCase().trim();

            if (inputVal.length == 0) {
                if (isSelect) {
                    hideSelect(this);
                } else {
                    hideAutocomplete(this);
                }
                return;
            }

            $.each(dropdownOptions, function(index, value) {
                $(value).removeClass('jigl-option-selected').hide();
                var optionValue = $(value).text().toLowerCase().trim();

                if (optionValue.startsWith(inputVal)) {
                    $(value).show();
                }
            });

            $(dropdownPanelTag).find('.jigl-option:visible:first').addClass('jigl-option-selected');
        });

        $(parentTagSelector).find('.jigl-select').on('click', function(event) {
            event.stopPropagation();
            
            if ($(this).hasClass('jigl-disabled')) {
                return;
            }
            
            if (!$(this).find('.jigl-select-dropdown').is(':visible')) {
                showSelect(this, true);
            } else {
                hideSelect(this, false);
            }
        });

        $(parentTagSelector).find('.jigl-select').on('blur', function(event) {
            if ($(this).find('.jigl-select-dropdown').is(':visible')) {
                hideSelect(this, false);
            }
        });

        $(parentTagSelector).find('.jigl-select, .jigl-autocomplete').on('keydown', function(event) {
            var isSelect = $(this).hasClass('jigl-select');
            
            var dropdownPanelTag = isSelect ? $(this).find('.jigl-select-dropdown') : $(this).find('.jigl-autocomplete-dropdown');

            if (!dropdownPanelTag.is(':visible'))
                return;

            var inputTag = $(this).find('input');
            var fieldTag = isSelect ? $(this).find('.jigl-field > div') : $(this).find('.jigl-field');

            var keyCode = event.keyCode;
            var currentChoiceTag = $('.jigl-option.jigl-option-selected', dropdownPanelTag).first();

            // Down Arrow
            if (keyCode == 40) {
                event.preventDefault();
                if (currentChoiceTag.length == 0) {
                    $('.jigl-option', dropdownPanelTag).first().addClass('jigl-option-selected');
                } else {
                    if (currentChoiceTag.text() != $(this).find('.jigl-option').last().text()) {
                        currentChoiceTag.removeClass('jigl-option-selected').next('.jigl-option').addClass('jigl-option-selected');
                    }
                }

                dropdownPanelTag.scrollTop($(this).find('.jigl-option-selected').get(0).offsetTop);
                fieldTag.html($('.jigl-option.jigl-option-selected', dropdownPanelTag).first().text());
                $(this).resize();

                return;
            }

            // Up Arrow
            if (keyCode == 38) {
                event.preventDefault();
                if (currentChoiceTag.length == 0) {
                    $('.jigl-option', dropdownPanelTag).last().addClass('jigl-option-selected');
                } else {
                    if (currentChoiceTag.text() != $(this).find('.jigl-option').first().text()) {
                        currentChoiceTag.removeClass('jigl-option-selected').prev('.jigl-option').addClass('jigl-option-selected');
                    }
                }

                dropdownPanelTag.scrollTop($(this).find('.jigl-option-selected').get(0).offsetTop);
                fieldTag.html($('.jigl-option.jigl-option-selected', dropdownPanelTag).first().text());
                $(this).resize();

                return;
            }

            // Enter
            if (keyCode == 13) {
                event.preventDefault();
                if (currentChoiceTag.length != 0) {
                    if (isSelect) {
                        fieldTag.html(currentChoiceTag.text());
                        inputTag.attr('value', currentChoiceTag.attr('data-value'));
                        inputTag.val(currentChoiceTag.attr('data-value'));
                    } else {
                        $(this).data().val(currentChoiceTag.text().trim());
                    }

                    currentChoiceTag.removeClass('jigl-option-selected');
                }

                if (dropdownPanelTag.is(':visible')) {
                    if (isSelect)
                        hideSelect(this, true);
                    else
                        hideAutocomplete(this);

                    inputTag.change();      // Fire change event
                }

                return;
            }

            // Esc
            if (keyCode == 27) {
                if (dropdownPanelTag.is(':visible')) {
                    if (isSelect)
                        hideSelect(this, false);
                }

                return;
            }
        });

        /* Range input events */
        var overDropdown = false;
        $(parentTagSelector).find('.jigl-range').on('click', function(event) {
            event.stopPropagation();
            event.preventDefault();
            if (!$(this).find('.jigl-range-dropdown').is(':visible')) {
                showRange(this);
            } else {
                if (!overDropdown)
                    hideRange(this);
            }
        });

        $(parentTagSelector).find('.jigl-range').on('blur', function(event) {
            if ($(this).find('.jigl-range-dropdown').is(':visible')) {
                if (!overDropdown)
                    hideRange(this);
            }
        });

        $(parentTagSelector).find('.jigl-range-dropdown').on('mouseenter', function(event) {
            overDropdown = true;
        });

        $(parentTagSelector).find('.jigl-range-dropdown').on('mouseleave', function(event) {
            overDropdown = false;
        });

        $(parentTagSelector).find('.jigl-range-input').on('click focus', function(event) {
            $(this).val("$");
        });

        $(parentTagSelector).find('.jigl-range-input').on('keyup', function(event) {
            if ($(this).val().length == 0)
                $(this).val("$");
        });

        $(parentTagSelector).find('.jigl-range-input').on('blur', function(event) {
            if (!overDropdown) {
                hideRange($(this).parents('.jigl-range'));
            }
        });

        $(parentTagSelector).find('.jigl-range-input').keydown(function(event) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(event.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                (event.keyCode == 65 && (event.ctrlKey === true || event.metaKey === true)) ||
                // Allow: home, end, left, right, down, up
                (event.keyCode >= 35 && event.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((event.shiftKey || (event.keyCode < 48 || event.keyCode > 57)) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        });

        $(parentTagSelector).find('.jigl-select').on('blur', function(event) {
            if ($(this).find('.jigl-select-dropdown').is(':visible')) {
                hideSelect(this, false);
            }
        });

        $(parentTagSelector).find('.jigl-select').smartResize(function(event) {
            if ($(this).find('.jigl-field > div').text() == "") {
                $(this).find('.jigl-field > span').hide();
                return;
            }

            $(this).find('.jigl-field > div').css('width', "");

            var viewWidth = $(this).find('.jigl-container').width();
            var textTagWidth = $(this).find('.jigl-field > div').width();
            var ellipsisWidth = $(this).find('.jigl-field > span').width();

            if (textTagWidth > viewWidth) {
                $(this).find('.jigl-field > div').width(viewWidth - ellipsisWidth);
                $(this).find('.jigl-field > span').show();
            } else {
                $(this).find('.jigl-field > span').hide();
            }

        });

        /* Set up events for date inputs */
        $(parentTagSelector).find('.jigl-date input').on('focus', function(event) {
            event.preventDefault();

            // TODO: Needed?
        });

        $(parentTagSelector).find('.jigl-date input').on('blur', function(event) {
            event.preventDefault();

            // TODO: Needed?
        });

        /* Set up events for options in select/range/autocomplete dropdowns */
        $(parentTagSelector).find('.jigl-autocomplete-dropdown').on('mouseenter', function(event) {
            overAutocompleteDropdown = true;
        });

        $(parentTagSelector).find('.jigl-autocomplete-dropdown').on('mouseleave', function(event) {
            overAutocompleteDropdown = false;
        });

        Jigl.setUpSelectOptions(parentTagSelector);
    };

    var setUpValidation = function(parentTagSelector) {
        if (!parentTagSelector) {
            parentTagSelector = 'body';
        }

        $(parentTagSelector).find('.jigl').data({ "valid": false });

        // Email inputs must have the form "user@domain.extension"
        $(parentTagSelector).find('.jigl-email').data({
            "validate": function(input) {
                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                return re.test(input);
            }
        });

        // Passwords must be at least 7 characters, have one digit, have one lowercase letter, and one uppercase letter
        $(parentTagSelector).find('.jigl-password').data({
            "validate": function(input) {
                //(?=.*\d)                //should contain at least one digit
                //(?=.*[a-z])             //should contain at least one lower case
                //(?=.*[A-Z])             //should contain at least one upper case
                //[a-zA-Z0-9]{7,}         //should contain at least 7 from the mentioned characters
                var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}/;
                return re.test(input);
            }
        });

        $(parentTagSelector).find('.jigl-range').data({
            "validate": function(input) {
                var minVal = Number(input.min.replace('$', ''));
                var maxVal = input.max.toLowerCase() == "any" ? -1 : Number(input.min.replace('$', ''));

                return maxVal == -1 || (minVal <= maxVal);
            }
        });
    };

    var setUpFunctions = function(parentTagSelector) {
        if (!parentTagSelector) {
            parentTagSelector = "body";
        }

        // Set up set/get value functions
        $(parentTagSelector).find('.jigl').get().forEach(function(value, index, array) {
            $(value).data({
                "val": function(newVal) {
                    if (newVal == null) {      // Getter
                        if ($(value).hasClass('jigl-select')) {
                            return $(value).find('.jigl-container > input').val();
                        } else if ($(value).hasClass('jigl-range')) {
                            return {
                                "min": $(value).find('.jigl-range-dropdown .jigl-range-min').val(),
                                "max": $(value).find('.jigl-range-dropdown .jigl-range-max').val()
                            };
                        } else {
                            return $(value).find('.jigl-field').val();
                        }
                    } else {            // Setter
                        if ($(value).hasClass('jigl-select')) {
                            $(value).find('.jigl-container > input').val(newVal);
                            $(value).find('.jigl-container > input').attr('value', newVal);
                        } else if ($(value).hasClass('jigl-range')) {
                            if (!newVal.min || !newVal.max)
                                return;

                            $(value).find('.jigl-range-dropdown .jigl-range-min').val(newVal.min);
                            $(value).find('.jigl-range-dropdown .jigl-range-min').attr('value', newVal.min);
                            $(value).find('.jigl-range-dropdown .jigl-range-max').val(newVal.max);
                            $(value).find('.jigl-range-dropdown .jigl-range-max').attr('value', newVal.max);
                        } else {
                            $(value).find('.jigl-field').val(newVal);
                            $(value).find('.jigl-field').attr('value', newVal);
                        }
                    }
                },
                "text": function(newText) {
                    if (newText == null) {     // Getter
                        if ($(value).hasClass('jigl-select')) {
                            return $(value).find('.jigl-container > .jigl-field > div').text();
                        } else if ($(value).hasClass('jigl-range')) {
                            return {
                                "min": $(value).find('.jigl-field .jigl-range-min').text(),
                                "max": $(value).find('.jigl-field .jigl-range-max').text()
                            };
                        } else {
                            return $(value).find('.jigl-field').val();
                        }
                    } else {            // Setter
                        if ($(value).hasClass('jigl-select')) {
                            $(value).find('.jigl-container > .jigl-field > div').text(newText);
                            $(value).find('.jigl-container > .jigl-field').attr('title', newText);
                        } else if ($(value).hasClass('jigl-range')) {
                            if (!newText.min || !newText.max)
                                return;

                            $(value).find('.jigl-field .jigl-range-min').text(newText.min);
                            $(value).find('.jigl-field .jigl-range-max').text(newText.max);
                        } else {
                            $(value).find('.jigl-field').val(newText);
                            $(value).find('.jigl-field').attr('value', newText);
                        }
                    }
                },
                "setValues": function(newVal) {
                    if ($(value).hasClass('jigl-select')) {
                        // Set the values with the correct value
                        $(value).find('.jigl-container > input').val(newVal);
                        $(value).find('.jigl-container > input').attr('value', newVal);

                        // Set the text with the correct value
                        var textValue = $(value).find('.jigl-option[data-value="' + newVal + '"]').html();
                        $(value).find('.jigl-container > .jigl-field > div').text(textValue);
                        $(value).find('.jigl-container > .jigl-field').attr('title', textValue);
                    } else if ($(value).hasClass('jigl-range')) {
                        if (!newVal.min || !newVal.max)
                            return;

                        $(value).find('.jigl-range-dropdown .jigl-range-min').val(newVal.min);
                        $(value).find('.jigl-range-dropdown .jigl-range-min').attr('value', newVal.min);
                        $(value).find('.jigl-range-dropdown .jigl-range-max').val(newVal.max);
                        $(value).find('.jigl-range-dropdown .jigl-range-max').attr('value', newVal.max);
                    } else {
                        $(value).find('.jigl-field').val(newVal);
                        $(value).find('.jigl-field').attr('value', newVal);
                    }
                },
                "getInputName": function() {
                    if ($(value).hasClass('jigl-select')) {
                        return $(value).find('.jigl-container > input').attr('name');
                    } else {
                        return $(value).find('.jigl-field').attr('name');
                    }
                }
            });
        });

        $(parentTagSelector).find('.jigl-range').get().forEach(function(value, index, array) {
            $(value).data({
                "minVal": function(newVal) {
                    if (!newVal) {      // Getter
                        return $(value).find('.jigl-range-dropdown .jigl-range-min').val();
                    } else {            // Setter
                        $(value).find('.jigl-range-dropdown .jigl-range-min').val(newVal);
                        $(value).find('.jigl-range-dropdown .jigl-range-min').attr('value', newVal);
                    }
                },
                "maxVal": function(newVal) {
                    if (!newVal) {      // Getter
                        return $(value).find('.jigl-range-dropdown .jigl-range-max').val();
                    } else {            // Setter
                        $(value).find('.jigl-range-dropdown .jigl-range-max').val(newVal);
                        $(value).find('.jigl-range-dropdown .jigl-range-max').attr('value', newVal);
                    }
                },
                "minText": function(newText) {
                    if (!newText) {      // Getter
                        return $(value).find('.jigl-field .jigl-range-min').text();
                    } else {            // Setter
                        $(value).find('.jigl-field .jigl-range-min').text(newText);
                    }
                },
                "maxText": function(newText) {
                    if (!newText) {      // Getter
                        return $(value).find('.jigl-field .jigl-range-max').text();
                    } else {            // Setter
                        $(value).find('.jigl-field .jigl-range-max').text(newText);
                    }
                }
            });
        });
    };
        
    var markValidated = function(element, markInvalid) {
        var infoTag = $(element).find('.jigl-info');

        if (!infoTag || $(element).hasClass('jigl-no-valid'))
            return;

        var minifyInfo = infoTag.hasClass('info-minify');

        if (infoTag.hasClass('jigl-okay')) {
            if (minifyInfo) {
                infoTag.html("<i class='fa fa-check'></i>");
            } else {
                infoTag.html("OK");
            }
            $(element).removeClass('jigl-invalid');
        } else if (infoTag.hasClass('jigl-error')) {
            if (minifyInfo) {
                infoTag.html("<i class='fa fa-times'></i>");
            } else {
                infoTag.html("Invalid");
            }

            if (markInvalid)
                $(element).addClass('jigl-invalid');
        } else {
            if (minifyInfo) {
                infoTag.html("<i class='fa fa-exclamation'></i>");
            } else {
                infoTag.html("Required");
            }
            $(element).removeClass('jigl-invalid');
        }
    };

    var checkLayoutStyles = function() {
        // Check bottom container styles
        var fullContainers = $('.jigl-1');

        $.each(fullContainers, function(index, value) {
            var sibling = $(value).prev();
            if (sibling.length > 0) {
                if (sibling.css('float') != 'none') {
                    $(value).addClass('jigl-margin'); 
                }
            }
        });
    };

    // Public Functions
    return {
        init: function() {
            setUpEvents();
            setUpValidation();
            setUpFunctions();
            
            // Set all inputs to disabled that are marked with the class
            $('.jigl-disabled').find('input').attr('disabled', true);
            $('.jigl-disabled').find('textarea').attr('disabled', true);

            // Capture the window resize event for select inputs
            $(window).resize(function() {
                clearTimeout(_resizeTimerId);

                _resizeTimerId = setTimeout(function() {
                    $('.jigl-select').resize();
                    $('.jigl-autocomplete').resize();
                }, 300);
            });

            // Trigger events to truncate select inputs
            $('.jigl-select').resize();
        },

        initializeContainer: function(container, isContainer) {
            var containerSelector = isContainer ? container : "#" + container;

            setUpEvents(containerSelector);
            setUpValidation(containerSelector);
            setUpFunctions(containerSelector);

            // Trigger events to truncate select inputs
            $('.jigl-select').resize();
        },

        validateContainer: function(containerTag, markContainers) {
            $(containerTag).find('.jigl').each(function(index) {
                // Select the correct tag to trigger event
                var inputObj = $(this);
                if (!inputObj.hasClass('jigl-select') && !inputObj.hasClass('jigl-range')) {
                    inputObj = inputObj.find('.jigl-field');
                }

                // Trigger the keyup event to validate
                inputObj.trigger('keyup', { markInvalid: markContainers });
            });
        },

        isContainerValid: function(containerTag) {
            if (containerTag.length == 0)
                return true;

            var containers = $(containerTag).find('.jigl');
            if (containers.length > 0) {
                var valid = true;
                containers.each(function(index) {
                    if (!valid)
                        return;

                    if (!$(this).data().valid) {
                        valid = false;
                    }
                });

                return valid;
            } else {
                if ($(containerTag).hasClass('jigl')) {
                    return $(containerTag).data().valid;
                }

                return false;
            }
        },

        createClone: function(originalContainerTag, copyDataAndEvents, copyChildDataAndEvents) {
            var newContainerTag = $(originalContainerTag).clone(copyDataAndEvents, copyChildDataAndEvents)

            this.initializeContainer(newContainerTag, true);
            this.resetContainer(newContainerTag)

            return newContainerTag;
        },

        resetContainer: function(containerTag) {
            var inputTags = containerTag.find(".jigl");

            // Set all required inputs back to "Required"
            inputTags.get().forEach(function(value, index, array) {
                var infoTag = $(value).find(".jigl-info");
                if (infoTag.length > 0) {
                    infoTag.removeClass('jigl-error');
                    infoTag.removeClass('jigl-okay');

                    markValidated(value);
                }

                // Text inputs
                $(value).find('input').val("");
                // Textarea inputs
                $(value).find('textarea').val("");

                if ($(value).hasClass('jigl-select')) {
                    $(value).find('.jigl-field > div').text("");
                    $(value).find('.jigl-field > div').attr("title", "")
                    $(value).find('input').val("-1");
                    $(value).find('input').attr("value", "-1")
                }
            });
        },

        setUpSelectOptions: function(parentTagSelector, onlyLast) {
            var selector = onlyLast ? '.jigl-option:last-child' : '.jigl-option';

            $(parentTagSelector).find(selector).on('mouseover', function(event) {
                // Remove selection from other classes if they have it
                $(this).parent().find('.jigl-option-selected').removeClass('jigl-option-selected');
                $(this).addClass('jigl-option-selected');

                // If the option belongs to a select input or a range input
                if ($(this).parents('.jigl-select').length > 0) {
                    $(this).parents('.jigl-container').find('.jigl-field div').html($(this).text());

                    $(this).parents('.jigl-select').resize();
                } else {
                    // TODO: Remove?
                }

                // Trigger click to fix iOS double click issues
                if (navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)|(playbook)|(silk)/i)) {
                    $(this).click();
                }
            });

            $(parentTagSelector).find(selector).on('click', function(event) {
                event.stopPropagation();

                // Check the type of input the option belongs to
                if ($(this).parents('.jigl-select').length > 0) {
                    if ($(this).hasClass('jigl-option-selected')) {
                        $(this).parents('.jigl-container').find('input').attr('value', $(this).attr('data-value'));
                        $(this).parents('.jigl-container').find('input').val($(this).attr('data-value'));
                        $(this).parents('.jigl-container').find('.jigl-field').attr('title', $(this).text());
                        $(this).parents('.jigl-select').resize();
                        $(this).parents('.jigl-select').find('input').change();
                    }

                    hideSelect($(this).parents('.jigl-select'), true);
                } else if ($(this).parents('.jigl-range').length > 0) {
                    if ($(this).hasClass('jigl-option-min')) {
                        $(this).parents('.jigl-range-container').find('.jigl-range-min').val($(this).text());
                    } else {
                        $(this).parents('.jigl-range-container').find('.jigl-range-max').val($(this).text());
                    }
                } else if ($(this).parents('.jigl-autocomplete').length > 0) {
                    if ($(this).hasClass('jigl-option-selected')) {
                        $(this).parents('.jigl-autocomplete').data().val($(this).text().trim());
                        $(this).parents('.jigl-autocomplete').resize();
                        $(this).parents('.jigl-autocomplete').find('input').change();
                        $(this).removeClass('jigl-option-selected');
                    }

                    hideAutocomplete($(this).parents('.jigl-autocomplete'));
                }
            });

            $(parentTagSelector).find(selector).on('mouseleave', function(event) {
                $(this).removeClass('jigl-option-selected');
            });
        }
    }
}();