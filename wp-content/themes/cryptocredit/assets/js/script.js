jQuery(document).ready(function () {
  // register new client
  jQuery("#register_new_client").submit(function (event) {
    event.preventDefault();
    jQuery(".custom-form").addClass("processing-loader");
    // alert('hello') ;
    var ajax_url = jQuery(this).attr("ajax_url");
    var home_url = jQuery(this).attr("home_url");
    var password = jQuery("#regis_pass").val();
    var confirmPassword = jQuery("#regis_confirm_pass").val();
    // alert(password) ;

    if (password !== confirmPassword) {
      jQuery(".custom-form").removeClass("processing-loader");
      // alert("Passwords do not match. Please make sure both passwords are the same.");
      jQuery("#confirm_pass_err").text(
        "Passwords do not match. Please make sure both passwords are the same."
      );
    } else {
      jQuery("#confirm_pass_err").text("");

      // form functionality
      var form = jQuery("#register_new_client").serialize();
      var formdata = new FormData();
      formdata.append("action", "register_new_client");
      formdata.append("register_new_client", form);

      jQuery.ajax(ajax_url, {
        // Using the localized object here
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,

        success: function (res) {
          jQuery(".custom-form").removeClass("processing-loader");

          // console.log(res) ;
          if (res.success === false) {
            alert(res.message);

            if (res.type === "email_error") {
              jQuery("#email_error").text(res.message);
            } else {
              jQuery("#email_error").text("");
            }

            if (res.type === "username_error") {
              jQuery("#username_error").text(res.message);
            } else {
              jQuery("#username_error").text("");
            }
          } else {
            alert(res.data);
            jQuery("#register_new_client")[0].reset();
            // alert(home_url) ;
            window.location.href = home_url;
          }
        },

        error: function (err) {},
      });
    }
  });

  // get login

  jQuery("#get_login").submit(function (event) {
    event.preventDefault();
    // alert('get_login');
    jQuery(".custom-form").addClass("processing-loader");
    //  var  ajax_url =  'http://localhost/cryptocredit/wp-admin/admin-ajax.php' ;
    var ajax_url = jQuery(this).attr("ajax_url");
    //  alert(ajax_url) ;
    //  url: custom_object.ajaxurl,

    var form = jQuery("#get_login").serialize();
    var formdata = new FormData();
    formdata.append("action", "get_login");
    formdata.append("get_login", form);

    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        jQuery(".custom-form").removeClass("processing-loader");

        if (res.success == false) {
          jQuery("#login_error").html(res.data);
        } else {
          jQuery("#login_error").html(res.data);
          alert(res.data);
          location.reload();
        }

        // alert(res.data) ;
        // location.reload();
      },

      error: function (err) {},
    });
  });

  // chhose membership
  jQuery(".choose_membership").click(function (event) {
    event.preventDefault();
    jQuery(".custom-form").addClass("processing-loader");
    var ajax_url = jQuery(this).attr("ajax_url");
    //  alert(ajax_url) ;
    //  url: custom_object.ajaxurl,

    var form = jQuery(this).attr("membership_id");

    // alert(form);

    var formdata = new FormData();
    formdata.append("action", "choose_membership");
    formdata.append("choose_membership", form);

    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        jQuery(".custom-form").removeClass("processing-loader");

        alert("membership added successfully");

        jQuery("#login_error").html(res.data);
        // alert(res.data) ;
        location.reload();
      },

      error: function (err) {},
    });
  });

  // chhose products
  jQuery(".choose_products").click(function (event) {
    event.preventDefault();
    jQuery(".custom-form").addClass("processing-loader");
    var ajax_url = jQuery(this).attr("ajax_url");
    //  alert(ajax_url) ;
    //  url: custom_object.ajaxurl,

    var form = jQuery(this).attr("product_id");

    // alert(form);

    var formdata = new FormData();
    formdata.append("action", "choose_products");
    formdata.append("choose_products", form);

    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        jQuery(".custom-form").removeClass("processing-loader");
        alert("Product choosed successfully");
        location.reload();
      },

      error: function (err) {},
    });
  });

  jQuery(".make-payment-stripe").click(function (event) {
    event.preventDefault();
    // alert('stripe payment') ;
    jQuery(".show_payment_div").toggleClass("d-none");
  });

  jQuery(".make_crypto_payments").click(function (event) {
    event.preventDefault();

    var ajax_url = jQuery(this).attr("ajax_url");
    //  alert(ajax_url) ;
    jQuery(".custom-form").addClass("processing-loader");

    var user_name = jQuery("#get_crypto_user").val();
    var membership_id = jQuery("#get_crypto_membership_id").val();
    var payment_amount = jQuery("#get_current_amount").val();
    var payment_from = jQuery(".payment_from").val();
    var payment_product_id = jQuery(".payment_product_id").val();
    // alert(payment_product_id);
    // alert(membership_id);
    // alert(payment_amount);

    var form =
      "user_name=" +
      user_name +
      "&membership_id=" +
      membership_id +
      "&payment_from=" +
      payment_from +
      "&payment_product_id=" +
      payment_product_id +
      "&payment_amount=" +
      payment_amount;

    var formdata = new FormData();

    formdata.append("action", "make_payment");
    formdata.append("make_payment", form);

    // alert(form) ;

    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        jQuery(".custom-form").removeClass("processing-loader");

        var inputString = res;

        var unescapedString = inputString.replace(/\\\//g, "/");
        alert(unescapedString);

        window.location.href = unescapedString;

        var decodedURL = decodeURIComponent(res);

        console.log(decodedURL);

        if (isValidURL(decodedURL)) {
          window.location.href = unescapedString; // Redirect to the Stripe Checkout Session URL
        } else {
          alert("Invalid response URL: " + decodedURL);
        }
      },

      error: function (err) {},
    });
  });

  // add stripe cards

  jQuery("#add_stripe_details").click(function (event) {
    event.preventDefault();

    var ajax_url = jQuery(this).attr("ajax_url");
    //  alert(ajax_url) ;

    // var user_name = jQuery('#get_crypto_user').val() ;
    var payment_card_value = jQuery("#payment_card_value").val();
    var payment_card_name = jQuery("#payment_card_name").val();
    var payment_card_no = jQuery("#payment_card_no").val();
    var payment_card_expiry = jQuery("#payment_card_expiry").val();
    var payment_card_cvc = jQuery("#payment_card_cvc").val();

    // console.log(payment_card_expiry);

    // alert(payment_card_value);
    // alert(payment_card_name);

    var form =
      "payment_card_value=" +
      payment_card_value +
      "&payment_card_name=" +
      payment_card_name +
      "&payment_card_no=" +
      payment_card_no +
      "&payment_card_expiry=" +
      payment_card_expiry +
      "&payment_card_cvc=" +
      payment_card_cvc +
      "&payment_card_name=" +
      payment_card_name;

    //   alert(form) ;

    var formdata = new FormData();
    formdata.append("action", "add_stripe");
    formdata.append("add_stripe", form);

    //     alert(form) ;

    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        // alert("Stripe connected successfully");

        // jQuery('#login_error').html(res.data)
        alert(res);
        location.reload();
      },

      error: function (err) {},
    });
  });

  // show the chart

  jQuery("#credit_score_btn").click(function (event) {
    event.preventDefault();
    var credit_score = jQuery("#inputnumber_credit_score").val();
    jQuery("#myjschart").toggleClass("d-none");

    // alert(credit_score);

    var ctx = document.getElementById("myChart").getContext("2d");
    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: "line", // also try bar or other graph types

      // The data for our dataset
      data: {
        labels: [
          "Jun 2016",
          "",
          "",
          "",
          "",
          "",
          "",
          "",
          "",
          "",
          "",
          "May 2017",
        ],
        // Information about the dataset
        datasets: [
          {
            label: "Rainfall",
            backgroundColor: "lightblue",
            borderColor: "royalblue",
            data: [20, 40, 60, 80, 100, 120, 140, 160, 180, 200, 220, 240],
          },
        ],
      },

      // Configuration options
      options: {
        layout: {
          padding: 10,
        },
        legend: {
          position: "bottom",
        },
        title: {
          display: true,
          text: "The credit goal",
        },
        scales: {
          yAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Precipitation in credit",
              },
            },
          ],
          xAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Month of the Year",
              },
            },
          ],
        },
      },
    });
  });

  // edit address
  jQuery(".header_bar_icon").click(function (event) {
    event.preventDefault();
    // alert('edit-address-icon');
    jQuery("#header_mobile_menu").toggleClass("d-none");
  });

  // edit address
  jQuery("#edit-address-icon").click(function (event) {
    event.preventDefault();
    // alert('edit-address-icon');
    jQuery(".edit-address").removeClass("d-none");
    jQuery(".edit-address-text").addClass("d-none");
    jQuery(this).addClass("d-none");
    jQuery("#edit-address-icon-tick").removeClass("d-none");
  });

  jQuery("#edit-address-icon-tick").click(function (event) {
    event.preventDefault();
    // alert('dit-address-icon-tick');
    var ajax_url = jQuery(this).attr("ajax_url");
    var address = jQuery("#edit-address").val();
    var phone = jQuery("#edit-phone").val();
    var email = jQuery("#edit-email").val();
    var password = jQuery("#edit-password").val();

    //  alert(address) ;
    //  alert(phone) ;
    //  alert(email) ;
    //  alert(password) ;

    var username = jQuery(this).attr("username");

    var from =
      "address=" +
      address +
      "&phone=" +
      phone +
      "&email=" +
      email +
      "&password=" +
      password +
      "&username=" +
      username;
    // alert(from) ;

    var formdata = new FormData();
    formdata.append("action", "update_address");
    formdata.append("update_address", from);

    console.log(formdata);

    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        if (res.success == false) {
          alert(res.data);
        } else {
          alert(res.data);
          // jQuery('#login_error').html(res.data)
          // alert(res.data) ;
          location.reload();
        }
      },

      error: function (err) {},
    });
  });
});

$(document).ready(function () {
  var minValue = 300;
  var maxValue = 850;

  var sliderRange = $(".slider-range");
  var sliderHandle = $(".slider-handle");

  // Calculate the percentage value based on the min and max values
  var percentage = ((maxValue - minValue) / (maxValue - minValue)) * 100;

  // Set the initial position of the handle and width of the range
  sliderRange.css("width", percentage + "%");
  sliderHandle.css("left", percentage + "%");

  // Function to update the slider position
  function updateSliderPosition(value) {
    // Calculate the new percentage value based on the current value
    var newPercentage = ((value - minValue) / (maxValue - minValue)) * 100;

    // Update the position of the handle and width of the range
    sliderRange.css("width", newPercentage + "%");
    sliderHandle.css("left", newPercentage + "%");
  }

  // Example: Move the slider to a new value (e.g., 600)
  var newValue = 600;
  updateSliderPosition(newValue);

  // Example: Handle slider movement when clicked
  $(".slider-wrapper").on("click", function (event) {
    var wrapperWidth = $(this).width();
    var offsetX = event.offsetX;
    var clickedPercentage = (offsetX / wrapperWidth) * 100;

    // Calculate the value based on the clicked percentage
    var newValue = minValue + (maxValue - minValue) * (clickedPercentage / 100);

    updateSliderPosition(newValue);
  });
});

jQuery(document).ready(function () {
  var stripe = Stripe(
    "pk_test_51Nkh40KrNttnLrPPx2ZEhzWwhfL8RvRp2PxrgKU0jFf1UPOhBJOPcbgTJZGUcd9wXDr5Kjo7x31ACvG0OnZYKSOF00NuKHpE86"
  );
  var elements = stripe.elements();

  var card = elements.create("card");
  card.mount("#card-element");

  jQuery("#payment-form").on("submit", function (event) {
    event.preventDefault();

    alert("hello");
    stripe.createToken(card).then(function (result) {
      if (result.error) {
        // Show error to your customer
        jQuery("#card-errors").text(result.error.message);
      } else {
        // Send the token to your server
        var token = result.token;
        // You can now send the token to your server for payment processing
        // Example: Send token via AJAX to your PHP server
        // handlePayment(token);
      }
    });
  });
});
