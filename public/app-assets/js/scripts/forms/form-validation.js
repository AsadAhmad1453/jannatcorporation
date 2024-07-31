/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootstrap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
    "use strict";

    var bootstrapForm = $(".needs-validation"),
        jqUserForm = $("#jquery-user-form"),
        jqCustomerForm = $("#jquery-customer-form"),
        jqCountryForm = $("#jquery-country-form"),
        jqJobEntryForm = $("#jquery-job-entry-form"),
        jqJobEntryForm = $("#jquery-port-form"),
        picker = $("#dob"),
        dtPicker = $("#dob-bootstrap-val"),
        select = $(".select2");

    // select2
    select.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this
            .select2({
                placeholder: "Select value",
                dropdownParent: $this.parent(),
            })
            .change(function () {
                $(this).valid();
            });
    });

    // Picker
    if (picker.length) {
        picker.flatpickr({
            onReady: function (selectedDates, dateStr, instance) {
                if (instance.isMobile) {
                    $(instance.mobileInput).attr("step", null);
                }
            },
        });
    }

    if (dtPicker.length) {
        dtPicker.flatpickr({
            onReady: function (selectedDates, dateStr, instance) {
                if (instance.isMobile) {
                    $(instance.mobileInput).attr("step", null);
                }
            },
        });
    }

    // Bootstrap Validation
    // --------------------------------------------------------------------
    if (bootstrapForm.length) {
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            "use strict";

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll(".needs-validation");

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener(
                    "submit",
                    function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        })();
        // Array.prototype.filter.call(bootstrapForm, function (form) {
        //   form.addEventListener('submit', function (event) {
        //     console.log('Form submitted!');
        // console.log('Validity:', form.checkValidity());
        //     if (form.checkValidity() === false) {
        //       form.classList.add('invalid');
        //     }
        //     form.classList.add('was-validated');
        //     event.preventDefault();
        //     // if (inputGroupValidation) {
        //     //   inputGroupValidation(form);
        //     // }
        //   });
        //   // bootstrapForm.find('input, textarea').on('focusout', function () {
        //   //   $(this)
        //   //     .removeClass('is-valid is-invalid')
        //   //     .addClass(this.checkValidity() ? 'is-valid' : 'is-invalid');
        //   //   if (inputGroupValidation) {
        //   //     inputGroupValidation(this);
        //   //   }
        //   // });
        // });
    }

    // jQuery Validation
    // --------------------------------------------------------------------
    if (jqUserForm.length) {
        jqUserForm.validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                },
                "password-confirmation": {
                    required: true,
                    equalTo: "#basic-default-password",
                },
            },
        });
    }
    if (jqCustomerForm) {
        jqCustomerForm.validate({
            rules: {
                name: {
                    required: true,
                },
                address1: {
                    required: true,
                },
                address2: {
                    required: true,
                },
                postcode: {
                    required: true,
                },
                country: {
                    required: true,
                },
                vat_type: {
                    required: true,
                },
                vat_number: {
                    required: true,
                },
                account_status: {
                    required: true,
                },
                staff: {
                    required: true,
                },
                password: {
                    required: true,
                },
                "password-confirmation": {
                    required: true,
                    equalTo: "#basic-default-password",
                },
            },
        });
    }
    if (jqCountryForm.length) {
        jqCountryForm.validate({
            rules: {
                name: {
                    required: true,
                },
                status: {
                    required: true,
                },
            },
        });
    }
    if (jqJobEntryForm.length) {
        jqJobEntryForm.validate({
            rules: {
                from_customer: {
                    required: true,
                },
                from_customer_name: {
                    required: true,
                },
                from_address1: {
                    required: true,
                },
                from_address2: {
                    required: true,
                },
                from_postcode: {
                    required: true,
                },
                from_country: {
                    required: true,
                },
                from_vat_type: {
                    required: true,
                },
                from_vat_number: {
                    required: true,
                },
                from_staff: {
                    required: true,
                },
                from_account_status: {
                    required: true,
                },
                ///////////////////////////// To Customer Validation ////////////////////////////////
                to_customer: {
                    required: true,
                },
                to_customer_name: {
                    required: true,
                },
                to_address1: {
                    required: true,
                },
                to_address2: {
                    required: true,
                },
                to_postcode: {
                    required: true,
                },
                to_country: {
                    required: true,
                },
                to_vat_type: {
                    required: true,
                },
                to_vat_number: {
                    required: true,
                },
                to_staff: {
                    required: true,
                },
                to_account_status: {
                    required: true,
                },
            },
        });
    }
});
