<?php  
/**
* Template Name: Registration page   
**/
  // get_header(); ?> 





<!DOCTYPE html>

<html lang="en" data-arp-injected="true" data-analytics-loaded="true">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script
      src="./crypto Strong_files/trellis-connect.js.download"
      data-testid="trellis-connect-script"
    ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Credit Strong</title>
    <!--<base href="/">-->
    <base href="." />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=5"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="https://apply.cryptocredit.pro/assets/favicon-self-service.png"
    />
    <style>
      /* vietnamese */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        font-display: swap;
      }

      /* latin-ext */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: swap;
      }

      /* latin */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQjUwkQ.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }

      /* vietnamese */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        font-display: swap;
      }

      /* latin-ext */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: swap;
      }

      /* latin */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQjUwkQ.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }

      /* vietnamese */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        font-display: swap;
      }

      /* latin-ext */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: swap;
      }

      /* latin */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQjUwkQ.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }

      /* vietnamese */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        font-display: swap;
      }

      /* latin-ext */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: swap;
      }

      /* latin */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQjUwkQ.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }

      /* vietnamese */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        font-display: swap;
      }

      /* latin-ext */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: swap;
      }

      /* latin */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQjUwkQ.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }

      /* vietnamese */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 800;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        font-display: swap;
      }

      /* latin-ext */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 800;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLQjUwkQ1OQ.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: swap;
      }

      /* latin */
      @font-face {
        font-family: "Muli";
        font-style: normal;
        font-weight: 800;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQjUwkQ.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }

      /* latin-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }

      /* latin */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      }

      /* latin-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }

      /* latin */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      }
    </style>
    <script async="" src="./crypto Strong_files/gtm.js.download"></script>
    <script language="javascript">
      var consoleCallback = function (data) {
        document.getElementById("black_box").value = data.iovation_blackbox;
        document.getElementById("submit_bb").value =
          "Alloy object ready, click to submit...";
      };
    </script>
    <script>
      setTimeout(() => {
        (function (w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js",
          });
          var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
          j.async = true;
          j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
          f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-MZMG4DX");
      }, 8000);
    </script>
    <style>
      @charset "UTF-8";

      html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      body {
        margin: 0;
        font-family: Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
        color: #777;
        background-color: #fcfcfc;
        font-weight: 200;
      }
      article,
      aside,
      details,
      figcaption,
      figure,
      footer,
      header,
      hgroup,
      main,
      menu,
      nav,
      section,
      summary {
        display: block;
      }
      audio,
      canvas,
      progress,
      video {
        display: inline-block;
        vertical-align: baseline;
      }
      audio:not([controls]) {
        display: none;
        height: 0;
      }
      [hidden],
      template {
        display: none;
      }
      a {
        background-color: transparent;
        color: #d9230f;
        text-decoration: none;
      }
      a:active,
      a:hover {
        outline: 0;
      }
      abbr[title] {
        border-bottom: none;
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
      }
      b,
      strong {
        font-weight: 700;
      }
      dfn {
        font-style: italic;
      }
      h1 {
        font-size: 2em;
        margin: 0.67em 0;
      }
      mark {
        background: #ff0;
        color: #000;
      }
      small {
        font-size: 80%;
      }
      sub,
      sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
      }
      sup {
        top: -0.5em;
      }
      sub {
        bottom: -0.25em;
      }
      img {
        vertical-align: middle;
        border: 0;
      }
      svg:not(:root) {
        overflow: hidden;
      }
      figure {
        margin: 1em 40px;
      }
      hr {
        box-sizing: content-box;
        height: 0;
        margin-top: 18px;
        margin-bottom: 18px;
        border: 0;
        border-top: 1px solid #ddd;
      }
      pre {
        overflow: auto;
      }
      code,
      kbd,
      pre,
      samp {
        font-family: monospace, monospace;
        font-size: 1em;
      }
      button,
      input,
      optgroup,
      select,
      textarea {
        color: inherit;
        font: inherit;
        margin: 0;
      }
      button {
        overflow: visible;
      }
      button,
      select {
        text-transform: none;
      }
      button,
      html input[type="button"],
      input[type="reset"],
      input[type="submit"] {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        cursor: pointer;
      }
      button[disabled],
      html input[disabled] {
        cursor: default;
      }
      button::-moz-focus-inner,
      input::-moz-focus-inner {
        border: 0;
        padding: 0;
      }
      input {
        line-height: normal;
      }
      input[type="checkbox"],
      input[type="radio"] {
        box-sizing: border-box;
        padding: 0;
      }
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        height: auto;
      }
      input[type="search"] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
        box-sizing: content-box;
      }
      input[type="search"]::-webkit-search-cancel-button,
      input[type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
        appearance: none;
      }
      fieldset {
        border: 1px solid silver;
        margin: 0 2px;
        padding: 0.35em 0.625em 0.75em;
      }
      legend {
        border: 0;
        padding: 0;
        color: #444;
      }
      textarea {
        overflow: auto;
      }
      optgroup {
        font-weight: 700;
      }
      table {
        border-collapse: collapse;
        border-spacing: 0;
      }
      td,
      th {
        padding: 0;
      }
      :after,
      :before {
        box-sizing: border-box;
      }
      button,
      input,
      select,
      textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
      }
      a:focus,
      a:hover {
        color: #91170a;
        text-decoration: underline;
      }
      a:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
      }
      [role="button"] {
        cursor: pointer;
      }
      p {
        margin: 0 0 9px;
      }
      .small,
      small {
        font-size: 92%;
      }
      .mark,
      mark {
        padding: 0.2em;
        background-color: #fcf8e3;
      }
      .text-left {
        text-align: left;
      }
      .text-right {
        text-align: right;
      }
      .text-center {
        text-align: center;
      }
      .text-justify {
        text-align: justify;
      }
      .text-nowrap {
        white-space: nowrap;
      }
      .text-lowercase {
        text-transform: lowercase;
      }
      .text-uppercase {
        text-transform: uppercase;
      }
      .text-capitalize {
        text-transform: capitalize;
      }
      .bg-primary {
        color: #fff;
        background-color: #d9230f;
      }
      a.bg-primary:focus,
      a.bg-primary:hover {
        background-color: #a91b0c;
      }
      .bg-success {
        background-color: #dff0d8;
      }
      a.bg-success:focus,
      a.bg-success:hover {
        background-color: #c1e2b3;
      }
      .bg-info {
        background-color: #d9edf7;
      }
      a.bg-info:focus,
      a.bg-info:hover {
        background-color: #afd9ee;
      }
      .bg-warning {
        background-color: #fcf8e3;
      }
      a.bg-warning:focus,
      a.bg-warning:hover {
        background-color: #f7ecb5;
      }
      .bg-danger {
        background-color: #f2dede;
      }
      a.bg-danger:focus,
      a.bg-danger:hover {
        background-color: #e4b9b9;
      }
      .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }
      @media (min-width: 768px) {
        .container {
          width: 750px;
        }
      }
      @media (min-width: 992px) {
        .container {
          width: 970px;
        }
      }
      @media (min-width: 1200px) {
        .container {
          width: 1170px;
        }
      }
      .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }
      .row {
        margin-right: -15px;
        margin-left: -15px;
      }
      .row-no-gutters {
        margin-right: 0;
        margin-left: 0;
      }
      .row-no-gutters [class*="col-"] {
        padding-right: 0;
        padding-left: 0;
      }
      .col-lg-1,
      .col-lg-2,
      .col-lg-3,
      .col-lg-4,
      .col-lg-5,
      .col-lg-6,
      .col-lg-7,
      .col-lg-8,
      .col-lg-9,
      .col-lg-10,
      .col-lg-11,
      .col-lg-12,
      .col-md-1,
      .col-md-2,
      .col-md-3,
      .col-md-4,
      .col-md-5,
      .col-md-6,
      .col-md-7,
      .col-md-8,
      .col-md-9,
      .col-md-10,
      .col-md-11,
      .col-md-12,
      .col-sm-1,
      .col-sm-2,
      .col-sm-3,
      .col-sm-4,
      .col-sm-5,
      .col-sm-6,
      .col-sm-7,
      .col-sm-8,
      .col-sm-9,
      .col-sm-10,
      .col-sm-11,
      .col-sm-12,
      .col-xs-1,
      .col-xs-2,
      .col-xs-3,
      .col-xs-4,
      .col-xs-5,
      .col-xs-6,
      .col-xs-7,
      .col-xs-8,
      .col-xs-9,
      .col-xs-10,
      .col-xs-11,
      .col-xs-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
      }
      .col-xs-1,
      .col-xs-2,
      .col-xs-3,
      .col-xs-4,
      .col-xs-5,
      .col-xs-6,
      .col-xs-7,
      .col-xs-8,
      .col-xs-9,
      .col-xs-10,
      .col-xs-11,
      .col-xs-12 {
        float: left;
      }
      .col-xs-12 {
        width: 100%;
      }
      .col-xs-11 {
        width: 91.66666667%;
      }
      .col-xs-10 {
        width: 83.33333333%;
      }
      .col-xs-9 {
        width: 75%;
      }
      .col-xs-8 {
        width: 66.66666667%;
      }
      .col-xs-7 {
        width: 58.33333333%;
      }
      .col-xs-6 {
        width: 50%;
      }
      .col-xs-5 {
        width: 41.66666667%;
      }
      .col-xs-4 {
        width: 33.33333333%;
      }
      .col-xs-3 {
        width: 25%;
      }
      .col-xs-2 {
        width: 16.66666667%;
      }
      .col-xs-1 {
        width: 8.33333333%;
      }
      .col-xs-offset-12 {
        margin-left: 100%;
      }
      .col-xs-offset-11 {
        margin-left: 91.66666667%;
      }
      .col-xs-offset-10 {
        margin-left: 83.33333333%;
      }
      .col-xs-offset-9 {
        margin-left: 75%;
      }
      .col-xs-offset-8 {
        margin-left: 66.66666667%;
      }
      .col-xs-offset-7 {
        margin-left: 58.33333333%;
      }
      .col-xs-offset-6 {
        margin-left: 50%;
      }
      .col-xs-offset-5 {
        margin-left: 41.66666667%;
      }
      .col-xs-offset-4 {
        margin-left: 33.33333333%;
      }
      .col-xs-offset-3 {
        margin-left: 25%;
      }
      .col-xs-offset-2 {
        margin-left: 16.66666667%;
      }
      .col-xs-offset-1 {
        margin-left: 8.33333333%;
      }
      .col-xs-offset-0 {
        margin-left: 0;
      }
      @media (min-width: 768px) {
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12 {
          float: left;
        }
        .col-sm-12 {
          width: 100%;
        }
        .col-sm-11 {
          width: 91.66666667%;
        }
        .col-sm-10 {
          width: 83.33333333%;
        }
        .col-sm-9 {
          width: 75%;
        }
        .col-sm-8 {
          width: 66.66666667%;
        }
        .col-sm-7 {
          width: 58.33333333%;
        }
        .col-sm-6 {
          width: 50%;
        }
        .col-sm-5 {
          width: 41.66666667%;
        }
        .col-sm-4 {
          width: 33.33333333%;
        }
        .col-sm-3 {
          width: 25%;
        }
        .col-sm-2 {
          width: 16.66666667%;
        }
        .col-sm-1 {
          width: 8.33333333%;
        }
        .col-sm-offset-12 {
          margin-left: 100%;
        }
        .col-sm-offset-11 {
          margin-left: 91.66666667%;
        }
        .col-sm-offset-10 {
          margin-left: 83.33333333%;
        }
        .col-sm-offset-9 {
          margin-left: 75%;
        }
        .col-sm-offset-8 {
          margin-left: 66.66666667%;
        }
        .col-sm-offset-7 {
          margin-left: 58.33333333%;
        }
        .col-sm-offset-6 {
          margin-left: 50%;
        }
        .col-sm-offset-5 {
          margin-left: 41.66666667%;
        }
        .col-sm-offset-4 {
          margin-left: 33.33333333%;
        }
        .col-sm-offset-3 {
          margin-left: 25%;
        }
        .col-sm-offset-2 {
          margin-left: 16.66666667%;
        }
        .col-sm-offset-1 {
          margin-left: 8.33333333%;
        }
        .col-sm-offset-0 {
          margin-left: 0;
        }
      }
      @media (min-width: 992px) {
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12 {
          float: left;
        }
        .col-md-12 {
          width: 100%;
        }
        .col-md-11 {
          width: 91.66666667%;
        }
        .col-md-10 {
          width: 83.33333333%;
        }
        .col-md-9 {
          width: 75%;
        }
        .col-md-8 {
          width: 66.66666667%;
        }
        .col-md-7 {
          width: 58.33333333%;
        }
        .col-md-6 {
          width: 50%;
        }
        .col-md-5 {
          width: 41.66666667%;
        }
        .col-md-4 {
          width: 33.33333333%;
        }
        .col-md-3 {
          width: 25%;
        }
        .col-md-2 {
          width: 16.66666667%;
        }
        .col-md-1 {
          width: 8.33333333%;
        }
        .col-md-offset-12 {
          margin-left: 100%;
        }
        .col-md-offset-11 {
          margin-left: 91.66666667%;
        }
        .col-md-offset-10 {
          margin-left: 83.33333333%;
        }
        .col-md-offset-9 {
          margin-left: 75%;
        }
        .col-md-offset-8 {
          margin-left: 66.66666667%;
        }
        .col-md-offset-7 {
          margin-left: 58.33333333%;
        }
        .col-md-offset-6 {
          margin-left: 50%;
        }
        .col-md-offset-5 {
          margin-left: 41.66666667%;
        }
        .col-md-offset-4 {
          margin-left: 33.33333333%;
        }
        .col-md-offset-3 {
          margin-left: 25%;
        }
        .col-md-offset-2 {
          margin-left: 16.66666667%;
        }
        .col-md-offset-1 {
          margin-left: 8.33333333%;
        }
        .col-md-offset-0 {
          margin-left: 0;
        }
      }
      @media (min-width: 1200px) {
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12 {
          float: left;
        }
        .col-lg-12 {
          width: 100%;
        }
        .col-lg-11 {
          width: 91.66666667%;
        }
        .col-lg-10 {
          width: 83.33333333%;
        }
        .col-lg-9 {
          width: 75%;
        }
        .col-lg-8 {
          width: 66.66666667%;
        }
        .col-lg-7 {
          width: 58.33333333%;
        }
        .col-lg-6 {
          width: 50%;
        }
        .col-lg-5 {
          width: 41.66666667%;
        }
        .col-lg-4 {
          width: 33.33333333%;
        }
        .col-lg-3 {
          width: 25%;
        }
        .col-lg-2 {
          width: 16.66666667%;
        }
        .col-lg-1 {
          width: 8.33333333%;
        }
        .col-lg-offset-12 {
          margin-left: 100%;
        }
        .col-lg-offset-11 {
          margin-left: 91.66666667%;
        }
        .col-lg-offset-10 {
          margin-left: 83.33333333%;
        }
        .col-lg-offset-9 {
          margin-left: 75%;
        }
        .col-lg-offset-8 {
          margin-left: 66.66666667%;
        }
        .col-lg-offset-7 {
          margin-left: 58.33333333%;
        }
        .col-lg-offset-6 {
          margin-left: 50%;
        }
        .col-lg-offset-5 {
          margin-left: 41.66666667%;
        }
        .col-lg-offset-4 {
          margin-left: 33.33333333%;
        }
        .col-lg-offset-3 {
          margin-left: 25%;
        }
        .col-lg-offset-2 {
          margin-left: 16.66666667%;
        }
        .col-lg-offset-1 {
          margin-left: 8.33333333%;
        }
        .col-lg-offset-0 {
          margin-left: 0;
        }
      }
      label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
      }
      input[type="search"] {
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      input[type="checkbox"],
      input[type="radio"] {
        margin: 4px 0 0;
        margin-top: 1px\9;
        line-height: normal;
      }
      fieldset[disabled] input[type="checkbox"],
      fieldset[disabled] input[type="radio"],
      input[type="checkbox"].disabled,
      input[type="checkbox"][disabled],
      input[type="radio"].disabled,
      input[type="radio"][disabled] {
        cursor: not-allowed;
      }
      input[type="file"] {
        display: block;
      }
      input[type="range"] {
        display: block;
        width: 100%;
      }
      select[multiple],
      select[size] {
        height: auto;
      }
      input[type="checkbox"]:focus,
      input[type="file"]:focus,
      input[type="radio"]:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
      }
      .form-control {
        display: block;
        width: 100%;
        height: 36px;
        padding: 8px 12px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #777;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
      .form-control:focus {
        border-color: #66afe9;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
          0 0 8px rgba(102, 175, 233, 0.6);
      }
      .form-control::-moz-placeholder {
        color: #ddd;
        opacity: 1;
      }
      .form-control:-ms-input-placeholder {
        color: #ddd;
      }
      .form-control::-webkit-input-placeholder {
        color: #ddd;
      }
      .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
      }
      .form-control[disabled],
      .form-control[readonly],
      fieldset[disabled] .form-control {
        background-color: #ddd;
        opacity: 1;
      }
      .form-control[disabled],
      fieldset[disabled] .form-control {
        cursor: not-allowed;
      }
      textarea.form-control {
        height: auto;
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) {
        input[type="date"].form-control,
        input[type="datetime-local"].form-control,
        input[type="month"].form-control,
        input[type="time"].form-control {
          line-height: 36px;
        }
        .input-group-sm input[type="date"],
        .input-group-sm input[type="datetime-local"],
        .input-group-sm input[type="month"],
        .input-group-sm input[type="time"],
        input[type="date"].input-sm,
        input[type="datetime-local"].input-sm,
        input[type="month"].input-sm,
        input[type="time"].input-sm {
          line-height: 30px;
        }
        .input-group-lg input[type="date"],
        .input-group-lg input[type="datetime-local"],
        .input-group-lg input[type="month"],
        .input-group-lg input[type="time"],
        input[type="date"].input-lg,
        input[type="datetime-local"].input-lg,
        input[type="month"].input-lg,
        input[type="time"].input-lg {
          line-height: 53px;
        }
      }
      .form-group {
        margin-bottom: 15px;
      }
      .checkbox,
      .radio {
        position: relative;
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .checkbox.disabled label,
      .radio.disabled label,
      fieldset[disabled] .checkbox label,
      fieldset[disabled] .radio label {
        cursor: not-allowed;
      }
      .checkbox label,
      .radio label {
        min-height: 18px;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: 400;
        cursor: pointer;
      }
      .checkbox-inline input[type="checkbox"],
      .checkbox input[type="checkbox"],
      .radio-inline input[type="radio"],
      .radio input[type="radio"] {
        position: absolute;
        margin-top: 4px\9;
        margin-left: -20px;
      }
      .checkbox + .checkbox,
      .radio + .radio {
        margin-top: -5px;
      }
      .checkbox-inline,
      .radio-inline {
        position: relative;
        display: inline-block;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: 400;
        vertical-align: middle;
        cursor: pointer;
      }
      .checkbox-inline.disabled,
      .radio-inline.disabled,
      fieldset[disabled] .checkbox-inline,
      fieldset[disabled] .radio-inline {
        cursor: not-allowed;
      }
      .checkbox-inline + .checkbox-inline,
      .radio-inline + .radio-inline {
        margin-top: 0;
        margin-left: 10px;
      }
      .form-control-static {
        min-height: 31px;
        padding-top: 9px;
        padding-bottom: 9px;
        margin-bottom: 0;
      }
      .form-control-static.input-lg,
      .form-control-static.input-sm {
        padding-right: 0;
        padding-left: 0;
      }
      .input-sm {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
      }
      select.input-sm {
        height: 30px;
        line-height: 30px;
      }
      select[multiple].input-sm,
      textarea.input-sm {
        height: auto;
      }
      .form-group-sm .form-control {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
      }
      .form-group-sm select.form-control {
        height: 30px;
        line-height: 30px;
      }
      .form-group-sm select[multiple].form-control,
      .form-group-sm textarea.form-control {
        height: auto;
      }
      .form-group-sm .form-control-static {
        height: 30px;
        min-height: 30px;
        padding: 6px 10px;
        font-size: 12px;
        line-height: 1.5;
      }
      .input-lg {
        height: 53px;
        padding: 14px 16px;
        font-size: 17px;
        line-height: 1.3333333;
        border-radius: 6px;
      }
      select.input-lg {
        height: 53px;
        line-height: 53px;
      }
      select[multiple].input-lg,
      textarea.input-lg {
        height: auto;
      }
      .form-group-lg .form-control {
        height: 53px;
        padding: 14px 16px;
        font-size: 17px;
        line-height: 1.3333333;
        border-radius: 6px;
      }
      .form-group-lg select.form-control {
        height: 53px;
        line-height: 53px;
      }
      .form-group-lg select[multiple].form-control,
      .form-group-lg textarea.form-control {
        height: auto;
      }
      .form-group-lg .form-control-static {
        height: 53px;
        min-height: 35px;
        padding: 15px 16px;
        font-size: 17px;
        line-height: 1.3333333;
      }
      .has-success .checkbox,
      .has-success .checkbox-inline,
      .has-success.checkbox-inline label,
      .has-success.checkbox label,
      .has-success .control-label,
      .has-success .help-block,
      .has-success .radio,
      .has-success .radio-inline,
      .has-success.radio-inline label,
      .has-success.radio label {
        color: #468847;
      }
      .has-success .form-control {
        border-color: #468847;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      }
      .has-success .form-control:focus {
        border-color: #356635;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7aba7b;
      }
      .has-success .input-group-addon {
        color: #468847;
        background-color: #dff0d8;
        border-color: #468847;
      }
      .has-warning .checkbox,
      .has-warning .checkbox-inline,
      .has-warning.checkbox-inline label,
      .has-warning.checkbox label,
      .has-warning .control-label,
      .has-warning .help-block,
      .has-warning .radio,
      .has-warning .radio-inline,
      .has-warning.radio-inline label,
      .has-warning.radio label {
        color: #c09853;
      }
      .has-warning .form-control {
        border-color: #c09853;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      }
      .has-warning .form-control:focus {
        border-color: #a47e3c;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #dbc59e;
      }
      .has-warning .input-group-addon {
        color: #c09853;
        background-color: #fcf8e3;
        border-color: #c09853;
      }
      .has-error .checkbox,
      .has-error .checkbox-inline,
      .has-error.checkbox-inline label,
      .has-error.checkbox label,
      .has-error .control-label,
      .has-error .help-block,
      .has-error .radio,
      .has-error .radio-inline,
      .has-error.radio-inline label,
      .has-error.radio label {
        color: #b94a48;
      }
      .has-error .form-control {
        border-color: #b94a48;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      }
      .has-error .form-control:focus {
        border-color: #953b39;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
      }
      .has-error .input-group-addon {
        color: #b94a48;
        background-color: #f2dede;
        border-color: #b94a48;
      }
      .help-block {
        display: block;
        margin-top: 5px;
        margin-bottom: 10px;
        color: #b7b7b7;
      }
      @media (min-width: 768px) {
        .form-inline .form-group {
          display: inline-block;
          margin-bottom: 0;
          vertical-align: middle;
        }
        .form-inline .form-control {
          display: inline-block;
          width: auto;
          vertical-align: middle;
        }
        .form-inline .form-control-static {
          display: inline-block;
        }
        .form-inline .input-group {
          display: inline-table;
          vertical-align: middle;
        }
        .form-inline .input-group .form-control,
        .form-inline .input-group .input-group-addon,
        .form-inline .input-group .input-group-btn {
          width: auto;
        }
        .form-inline .input-group > .form-control {
          width: 100%;
        }
        .form-inline .control-label {
          margin-bottom: 0;
          vertical-align: middle;
        }
        .form-inline .checkbox,
        .form-inline .radio {
          display: inline-block;
          margin-top: 0;
          margin-bottom: 0;
          vertical-align: middle;
        }
        .form-inline .checkbox label,
        .form-inline .radio label {
          padding-left: 0;
        }
        .form-inline .checkbox input[type="checkbox"],
        .form-inline .radio input[type="radio"] {
          position: relative;
          margin-left: 0;
        }
      }
      .form-horizontal .checkbox,
      .form-horizontal .checkbox-inline,
      .form-horizontal .radio,
      .form-horizontal .radio-inline {
        padding-top: 9px;
        margin-top: 0;
        margin-bottom: 0;
      }
      .form-horizontal .checkbox,
      .form-horizontal .radio {
        min-height: 27px;
      }
      .form-horizontal .form-group {
        margin-right: -15px;
        margin-left: -15px;
      }
      @media (min-width: 768px) {
        .form-horizontal .control-label {
          padding-top: 9px;
          margin-bottom: 0;
          text-align: right;
        }
      }
      @media (min-width: 768px) {
        .form-horizontal .form-group-lg .control-label {
          padding-top: 15px;
          font-size: 17px;
        }
      }
      @media (min-width: 768px) {
        .form-horizontal .form-group-sm .control-label {
          padding-top: 6px;
          font-size: 12px;
        }
      }
      .btn {
        font-family: Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        padding: 8px 12px;
        font-size: 13px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .btn.active.focus,
      .btn.active:focus,
      .btn.focus,
      .btn:active.focus,
      .btn:active:focus,
      .btn:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
      }
      .btn.focus,
      .btn:focus,
      .btn:hover {
        color: #fff;
        text-decoration: none;
      }
      .btn.active,
      .btn:active {
        background-image: none;
        outline: 0;
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
      }
      .btn.disabled,
      .btn[disabled],
      fieldset[disabled] .btn {
        cursor: not-allowed;
        filter: alpha(opacity=65);
        opacity: 0.65;
        box-shadow: none;
      }
      a.btn.disabled,
      fieldset[disabled] a.btn {
        pointer-events: none;
      }
      .btn-default {
        color: #fff;
        background-color: #474949;
        border-color: #474949;
      }
      .btn-default.focus,
      .btn-default:focus {
        color: #fff;
        background-color: #2e2f2f;
        border-color: #080808;
      }
      .btn-default:hover {
        color: #fff;
        background-color: #2e2f2f;
        border-color: #292a2a;
      }
      .btn-default.active,
      .btn-default:active,
      .open > .dropdown-toggle.btn-default {
        color: #fff;
        background-color: #2e2f2f;
        background-image: none;
        border-color: #292a2a;
      }
      .btn-default.active.focus,
      .btn-default.active:focus,
      .btn-default.active:hover,
      .btn-default:active.focus,
      .btn-default:active:focus,
      .btn-default:active:hover,
      .open > .dropdown-toggle.btn-default.focus,
      .open > .dropdown-toggle.btn-default:focus,
      .open > .dropdown-toggle.btn-default:hover {
        color: #fff;
        background-color: #1c1d1d;
        border-color: #080808;
      }
      .btn-default.disabled.focus,
      .btn-default.disabled:focus,
      .btn-default.disabled:hover,
      .btn-default[disabled].focus,
      .btn-default[disabled]:focus,
      .btn-default[disabled]:hover,
      fieldset[disabled] .btn-default.focus,
      fieldset[disabled] .btn-default:focus,
      fieldset[disabled] .btn-default:hover {
        background-color: #474949;
        border-color: #474949;
      }
      .btn-default .badge {
        color: #474949;
        background-color: #fff;
      }
      .btn-primary {
        color: #fff;
        background-color: #d9230f;
        border-color: #d9230f;
      }
      .btn-primary.focus,
      .btn-primary:focus {
        color: #fff;
        background-color: #a91b0c;
        border-color: #621007;
      }
      .btn-primary:hover {
        color: #fff;
        background-color: #a91b0c;
        border-color: #a01a0b;
      }
      .btn-primary.active,
      .btn-primary:active,
      .open > .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #a91b0c;
        background-image: none;
        border-color: #a01a0b;
      }
      .btn-primary.active.focus,
      .btn-primary.active:focus,
      .btn-primary.active:hover,
      .btn-primary:active.focus,
      .btn-primary:active:focus,
      .btn-primary:active:hover,
      .open > .dropdown-toggle.btn-primary.focus,
      .open > .dropdown-toggle.btn-primary:focus,
      .open > .dropdown-toggle.btn-primary:hover {
        color: #fff;
        background-color: #881609;
        border-color: #621007;
      }
      .btn-primary.disabled.focus,
      .btn-primary.disabled:focus,
      .btn-primary.disabled:hover,
      .btn-primary[disabled].focus,
      .btn-primary[disabled]:focus,
      .btn-primary[disabled]:hover,
      fieldset[disabled] .btn-primary.focus,
      fieldset[disabled] .btn-primary:focus,
      fieldset[disabled] .btn-primary:hover {
        background-color: #d9230f;
        border-color: #d9230f;
      }
      .btn-primary .badge {
        color: #d9230f;
        background-color: #fff;
      }
      .btn-success {
        color: #fff;
        background-color: #469408;
        border-color: #469408;
      }
      .btn-success.focus,
      .btn-success:focus {
        color: #fff;
        background-color: #2f6405;
        border-color: #0d1b01;
      }
      .btn-success:hover {
        color: #fff;
        background-color: #2f6405;
        border-color: #2b5a05;
      }
      .btn-success.active,
      .btn-success:active,
      .open > .dropdown-toggle.btn-success {
        color: #fff;
        background-color: #2f6405;
        background-image: none;
        border-color: #2b5a05;
      }
      .btn-success.active.focus,
      .btn-success.active:focus,
      .btn-success.active:hover,
      .btn-success:active.focus,
      .btn-success:active:focus,
      .btn-success:active:hover,
      .open > .dropdown-toggle.btn-success.focus,
      .open > .dropdown-toggle.btn-success:focus,
      .open > .dropdown-toggle.btn-success:hover {
        color: #fff;
        background-color: #1f4204;
        border-color: #0d1b01;
      }
      .btn-success.disabled.focus,
      .btn-success.disabled:focus,
      .btn-success.disabled:hover,
      .btn-success[disabled].focus,
      .btn-success[disabled]:focus,
      .btn-success[disabled]:hover,
      fieldset[disabled] .btn-success.focus,
      fieldset[disabled] .btn-success:focus,
      fieldset[disabled] .btn-success:hover {
        background-color: #469408;
        border-color: #469408;
      }
      .btn-success .badge {
        color: #469408;
        background-color: #fff;
      }
      .btn-info {
        color: #fff;
        background-color: #029acf;
        border-color: #029acf;
      }
      .btn-info.focus,
      .btn-info:focus {
        color: #fff;
        background-color: #02749c;
        border-color: #013c51;
      }
      .btn-info:hover {
        color: #fff;
        background-color: #02749c;
        border-color: #016d92;
      }
      .btn-info.active,
      .btn-info:active,
      .open > .dropdown-toggle.btn-info {
        color: #fff;
        background-color: #02749c;
        background-image: none;
        border-color: #016d92;
      }
      .btn-info.active.focus,
      .btn-info.active:focus,
      .btn-info.active:hover,
      .btn-info:active.focus,
      .btn-info:active:focus,
      .btn-info:active:hover,
      .open > .dropdown-toggle.btn-info.focus,
      .open > .dropdown-toggle.btn-info:focus,
      .open > .dropdown-toggle.btn-info:hover {
        color: #fff;
        background-color: #015a79;
        border-color: #013c51;
      }
      .btn-info.disabled.focus,
      .btn-info.disabled:focus,
      .btn-info.disabled:hover,
      .btn-info[disabled].focus,
      .btn-info[disabled]:focus,
      .btn-info[disabled]:hover,
      fieldset[disabled] .btn-info.focus,
      fieldset[disabled] .btn-info:focus,
      fieldset[disabled] .btn-info:hover {
        background-color: #029acf;
        border-color: #029acf;
      }
      .btn-info .badge {
        color: #029acf;
        background-color: #fff;
      }
      .btn-warning {
        color: #fff;
        background-color: #9b479f;
        border-color: #9b479f;
      }
      .btn-warning.focus,
      .btn-warning:focus {
        color: #fff;
        background-color: #79377c;
        border-color: #452047;
      }
      .btn-warning:hover {
        color: #fff;
        background-color: #79377c;
        border-color: #723475;
      }
      .btn-warning.active,
      .btn-warning:active,
      .open > .dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #79377c;
        background-image: none;
        border-color: #723475;
      }
      .btn-warning.active.focus,
      .btn-warning.active:focus,
      .btn-warning.active:hover,
      .btn-warning:active.focus,
      .btn-warning:active:focus,
      .btn-warning:active:hover,
      .open > .dropdown-toggle.btn-warning.focus,
      .open > .dropdown-toggle.btn-warning:focus,
      .open > .dropdown-toggle.btn-warning:hover {
        color: #fff;
        background-color: #612c63;
        border-color: #452047;
      }
      .btn-warning.disabled.focus,
      .btn-warning.disabled:focus,
      .btn-warning.disabled:hover,
      .btn-warning[disabled].focus,
      .btn-warning[disabled]:focus,
      .btn-warning[disabled]:hover,
      fieldset[disabled] .btn-warning.focus,
      fieldset[disabled] .btn-warning:focus,
      fieldset[disabled] .btn-warning:hover {
        background-color: #9b479f;
        border-color: #9b479f;
      }
      .btn-warning .badge {
        color: #9b479f;
        background-color: #fff;
      }
      .btn-danger {
        color: #fff;
        background-color: #d9831f;
        border-color: #d9831f;
      }
      .btn-danger.focus,
      .btn-danger:focus {
        color: #fff;
        background-color: #ac6819;
        border-color: #69400f;
      }
      .btn-danger:hover {
        color: #fff;
        background-color: #ac6819;
        border-color: #a36317;
      }
      .btn-danger.active,
      .btn-danger:active,
      .open > .dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #ac6819;
        background-image: none;
        border-color: #a36317;
      }
      .btn-danger.active.focus,
      .btn-danger.active:focus,
      .btn-danger.active:hover,
      .btn-danger:active.focus,
      .btn-danger:active:focus,
      .btn-danger:active:hover,
      .open > .dropdown-toggle.btn-danger.focus,
      .open > .dropdown-toggle.btn-danger:focus,
      .open > .dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #8d5514;
        border-color: #69400f;
      }
      .btn-danger.disabled.focus,
      .btn-danger.disabled:focus,
      .btn-danger.disabled:hover,
      .btn-danger[disabled].focus,
      .btn-danger[disabled]:focus,
      .btn-danger[disabled]:hover,
      fieldset[disabled] .btn-danger.focus,
      fieldset[disabled] .btn-danger:focus,
      fieldset[disabled] .btn-danger:hover {
        background-color: #d9831f;
        border-color: #d9831f;
      }
      .btn-danger .badge {
        color: #d9831f;
        background-color: #fff;
      }
      .btn-link {
        font-weight: 400;
        color: #d9230f;
        border-radius: 0;
      }
      .btn-link,
      .btn-link.active,
      .btn-link:active,
      .btn-link[disabled],
      fieldset[disabled] .btn-link {
        background-color: transparent;
        box-shadow: none;
      }
      .btn-link,
      .btn-link:active,
      .btn-link:focus,
      .btn-link:hover {
        border-color: transparent;
      }
      .btn-link:focus,
      .btn-link:hover {
        color: #91170a;
        text-decoration: underline;
        background-color: transparent;
      }
      .btn-link[disabled]:focus,
      .btn-link[disabled]:hover,
      fieldset[disabled] .btn-link:focus,
      fieldset[disabled] .btn-link:hover {
        color: grey;
        text-decoration: none;
      }
      .btn-group-lg > .btn,
      .btn-lg {
        padding: 14px 16px;
        font-size: 17px;
        line-height: 1.3333333;
        border-radius: 6px;
      }
      .btn-group-sm > .btn,
      .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
      }
      .btn-group-xs > .btn,
      .btn-xs {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
      }
      .btn-block {
        display: block;
        width: 100%;
      }
      .btn-block + .btn-block {
        margin-top: 5px;
      }
      input[type="button"].btn-block,
      input[type="reset"].btn-block,
      input[type="submit"].btn-block {
        width: 100%;
      }
      .fade {
        opacity: 0;
        transition: opacity 0.15s linear;
      }
      .fade.in {
        opacity: 1;
      }
      .collapse {
        display: none;
      }
      .collapse.in {
        display: block;
      }
      tr.collapse.in {
        display: table-row;
      }
      tbody.collapse.in {
        display: table-row-group;
      }
      .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        transition-property: height, visibility;
        transition-duration: 0.35s;
        transition-timing-function: ease;
      }
      .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-top: 4px solid\9;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
      }
      .label {
        display: inline;
        padding: 0.2em 0.6em 0.3em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25em;
      }
      a.label:focus,
      a.label:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer;
      }
      .label:empty {
        display: none;
      }
      .btn .label {
        position: relative;
        top: -1px;
      }
      @keyframes progress-bar-stripes {
        0% {
          background-position: 40px 0;
        }
        to {
          background-position: 0 0;
        }
      }
      .panel {
        margin-bottom: 18px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
      }
      .panel-default {
        border-color: #ddd;
      }
      .panel-default > .panel-heading {
        color: #444;
        background-color: #fcfcfc;
        border-color: #ddd;
      }
      .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ddd;
      }
      .panel-default > .panel-heading .badge {
        color: #fcfcfc;
        background-color: #444;
      }
      .panel-default > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ddd;
      }
      .close {
        float: right;
        font-size: 19.5px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: 0.2;
      }
      .close:focus,
      .close:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        filter: alpha(opacity=50);
        opacity: 0.5;
      }
      button.close {
        padding: 0;
        cursor: pointer;
        background: transparent;
        border: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      .btn-group-vertical > .btn-group:after,
      .btn-group-vertical > .btn-group:before,
      .btn-toolbar:after,
      .btn-toolbar:before,
      .clearfix:after,
      .clearfix:before,
      .container-fluid:after,
      .container-fluid:before,
      .container:after,
      .container:before,
      .dl-horizontal dd:after,
      .dl-horizontal dd:before,
      .form-horizontal .form-group:after,
      .form-horizontal .form-group:before,
      .modal-footer:after,
      .modal-footer:before,
      .modal-header:after,
      .modal-header:before,
      .nav:after,
      .nav:before,
      .navbar-collapse:after,
      .navbar-collapse:before,
      .navbar-header:after,
      .navbar-header:before,
      .navbar:after,
      .navbar:before,
      .pager:after,
      .pager:before,
      .panel-body:after,
      .panel-body:before,
      .row:after,
      .row:before {
        display: table;
        content: " ";
      }
      .btn-group-vertical > .btn-group:after,
      .btn-toolbar:after,
      .clearfix:after,
      .container-fluid:after,
      .container:after,
      .dl-horizontal dd:after,
      .form-horizontal .form-group:after,
      .modal-footer:after,
      .modal-header:after,
      .nav:after,
      .navbar-collapse:after,
      .navbar-header:after,
      .navbar:after,
      .pager:after,
      .panel-body:after,
      .row:after {
        clear: both;
      }
      .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto;
      }
      .pull-right {
        float: right !important;
      }
      .pull-left {
        float: left !important;
      }
      .hide {
        display: none !important;
      }
      .show {
        display: block !important;
      }
      .invisible {
        visibility: hidden;
      }
      .text-hide {
        font: 0/0 a, sans-serif;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
      }
      .hidden {
        display: none !important;
      }
      .affix {
        position: fixed;
      }
      .visible-lg,
      .visible-lg-block,
      .visible-lg-inline,
      .visible-lg-inline-block,
      .visible-md,
      .visible-md-block,
      .visible-md-inline,
      .visible-md-inline-block,
      .visible-sm,
      .visible-sm-block,
      .visible-sm-inline,
      .visible-sm-inline-block,
      .visible-xs,
      .visible-xs-block,
      .visible-xs-inline,
      .visible-xs-inline-block {
        display: none !important;
      }
      @media (max-width: 767px) {
        .visible-xs {
          display: block !important;
        }
        table.visible-xs {
          display: table !important;
        }
        tr.visible-xs {
          display: table-row !important;
        }
        td.visible-xs,
        th.visible-xs {
          display: table-cell !important;
        }
      }
      @media (max-width: 767px) {
        .visible-xs-block {
          display: block !important;
        }
      }
      @media (max-width: 767px) {
        .visible-xs-inline {
          display: inline !important;
        }
      }
      @media (max-width: 767px) {
        .visible-xs-inline-block {
          display: inline-block !important;
        }
      }
      @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm {
          display: block !important;
        }
        table.visible-sm {
          display: table !important;
        }
        tr.visible-sm {
          display: table-row !important;
        }
        td.visible-sm,
        th.visible-sm {
          display: table-cell !important;
        }
      }
      @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-block {
          display: block !important;
        }
      }
      @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline {
          display: inline !important;
        }
      }
      @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline-block {
          display: inline-block !important;
        }
      }
      @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md {
          display: block !important;
        }
        table.visible-md {
          display: table !important;
        }
        tr.visible-md {
          display: table-row !important;
        }
        td.visible-md,
        th.visible-md {
          display: table-cell !important;
        }
      }
      @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-block {
          display: block !important;
        }
      }
      @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline {
          display: inline !important;
        }
      }
      @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline-block {
          display: inline-block !important;
        }
      }
      @media (min-width: 1200px) {
        .visible-lg {
          display: block !important;
        }
        table.visible-lg {
          display: table !important;
        }
        tr.visible-lg {
          display: table-row !important;
        }
        td.visible-lg,
        th.visible-lg {
          display: table-cell !important;
        }
      }
      @media (min-width: 1200px) {
        .visible-lg-block {
          display: block !important;
        }
      }
      @media (min-width: 1200px) {
        .visible-lg-inline {
          display: inline !important;
        }
      }
      @media (min-width: 1200px) {
        .visible-lg-inline-block {
          display: inline-block !important;
        }
      }
      @media (max-width: 767px) {
        .hidden-xs {
          display: none !important;
        }
      }
      @media (min-width: 768px) and (max-width: 991px) {
        .hidden-sm {
          display: none !important;
        }
      }
      @media (min-width: 992px) and (max-width: 1199px) {
        .hidden-md {
          display: none !important;
        }
      }
      @media (min-width: 1200px) {
        .hidden-lg {
          display: none !important;
        }
      }
      .btn-default,
      .btn-default:hover {
        background-image: linear-gradient(#4f5151, #474949 6%, #3f4141);
        background-repeat: no-repeat;
        filter: none;
        border: 1px solid #2e2f2f;
      }
      .btn-primary,
      .btn-primary:hover {
        background-image: linear-gradient(#e72510, #d9230f 6%, #cb210e);
        background-repeat: no-repeat;
        filter: none;
        border: 1px solid #a91b0c;
      }
      .btn-success,
      .btn-success:hover {
        background-image: linear-gradient(#4da309, #469408 6%, #3f8507);
        background-repeat: no-repeat;
        filter: none;
        border: 1px solid #2f6405;
      }
      .btn-info,
      .btn-info:hover {
        background-image: linear-gradient(#02a5de, #029acf 6%, #028fc0);
        background-repeat: no-repeat;
        filter: none;
        border: 1px solid #02749c;
      }
      .btn-warning,
      .btn-warning:hover {
        background-image: linear-gradient(#a54caa, #9b479f 6%, #914294);
        background-repeat: no-repeat;
        filter: none;
        border: 1px solid #79377c;
      }
      .btn-danger,
      .btn-danger:hover {
        background-image: linear-gradient(#e08b27, #d9831f 6%, #cc7b1d);
        background-repeat: no-repeat;
        filter: none;
        border: 1px solid #ac6819;
      }
      th {
        color: #444;
      }
      .has-warning .checkbox,
      .has-warning .checkbox-inline,
      .has-warning.checkbox-inline label,
      .has-warning.checkbox label,
      .has-warning .control-label,
      .has-warning .form-control-feedback,
      .has-warning .help-block,
      .has-warning .radio,
      .has-warning .radio-inline,
      .has-warning.radio-inline label,
      .has-warning.radio label {
        color: #d9831f;
      }
      .has-warning .form-control,
      .has-warning .form-control:focus {
        border-color: #d9831f;
      }
      .has-error .checkbox,
      .has-error .checkbox-inline,
      .has-error.checkbox-inline label,
      .has-error.checkbox label,
      .has-error .control-label,
      .has-error .form-control-feedback,
      .has-error .help-block,
      .has-error .radio,
      .has-error .radio-inline,
      .has-error.radio-inline label,
      .has-error.radio label {
        color: #d9230f;
      }
      .has-error .form-control,
      .has-error .form-control:focus {
        border-color: #d9230f;
      }
      .has-success .checkbox,
      .has-success .checkbox-inline,
      .has-success.checkbox-inline label,
      .has-success.checkbox label,
      .has-success .control-label,
      .has-success .form-control-feedback,
      .has-success .help-block,
      .has-success .radio,
      .has-success .radio-inline,
      .has-success.radio-inline label,
      .has-success.radio label {
        color: #469408;
      }
      .has-success .form-control,
      .has-success .form-control:focus {
        border-color: #469408;
      }
      .pager a {
        color: #444;
      }
      .pager .active > a,
      .pager a:hover {
        border-color: #d9230f;
        color: #fff;
      }
      .pager .disabled > a {
        border-color: #ddd;
      }
      @font-face {
        font-family: PrimeIcons;
        font-display: swap;
        src: url(/assets/fonts/primeicons.eot);
        src: url(/assets/fonts/primeicons.eot?#iefix)
            format("embedded-opentype"),
          url(/assets/fonts/primeicons.ttf) format("truetype"),
          url(/assets/fonts/primeicons.woff) format("woff"),
          url(/assets/fonts/primeicons.svg?#primeicons) format("svg");
        font-weight: 400;
        font-style: normal;
      }
      .pi {
        font-family: primeicons, sans-serif;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        display: inline-block;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      .pi-fw {
        width: 1.28571429em;
        text-align: center;
      }
      .pi-spin {
        animation: fa-spin 2s linear infinite;
      }
      .pi-calendar-times:before {
        content: "";
      }
      .pi-chevron-circle-left:before {
        content: "";
      }
      .pi-chevron-circle-down:before {
        content: "";
      }
      .pi-chevron-circle-right:before {
        content: "";
      }
      .pi-chevron-circle-up:before {
        content: "";
      }
      .pi-plus:before {
        content: "";
      }
      .pi-plus-circle:before {
        content: "";
      }
      .pi-minus:before {
        content: "";
      }
      .pi-minus-circle:before {
        content: "";
      }
      * {
        box-sizing: border-box;
      }
      body .ui-widget {
        font-family: Open Sans, Helvetica Neue, sans-serif;
        font-size: 14px;
        text-decoration: none;
      }
      body .ui-widget-overlay {
        background-color: rgba(0, 0, 0, 0.4);
      }
      body .ui-widget-content p {
        line-height: 1.5;
        margin: 0;
      }
      body .ui-corner-all {
        border-radius: 3px;
      }
      body .pi {
        font-size: 1.25em;
      }
      body ::-webkit-input-placeholder {
        color: #666;
      }
      body :-moz-placeholder,
      body ::-moz-placeholder {
        color: #666;
      }
      body :-ms-input-placeholder {
        color: #666;
      }
      body .ui-chkbox {
        display: inline-block;
        vertical-align: middle;
        margin: 0;
        width: 20px;
        height: 20px;
      }
      body .ui-chkbox .ui-chkbox-box {
        border: 1px solid #a6a6a6;
        background-color: #fff;
        width: 20px;
        height: 20px;
        text-align: center;
        border-radius: 3px;
        transition: background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
      }
      body .ui-chkbox .ui-chkbox-box:not(.ui-state-disabled):hover {
        border-color: #212121;
      }
      body .ui-chkbox .ui-chkbox-box.ui-state-active {
        color: #6bbd44;
        display: flex;
        justify-content: center;
        padding-top: 2px;
      }
      body .ui-chkbox .ui-chkbox-box .ui-chkbox-icon {
        overflow: hidden;
        position: relative;
      }
      body .ui-chkbox .pi-check:before {
        font-size: 14px;
        content: "";
      }
      body .ui-chkbox-label {
        margin: 0 0 0 0.5em;
      }
      body p-checkbox.ng-dirty.ng-invalid .ui-chkbox-box {
        border: 1px solid #a80000;
      }
      body .ui-dropdown {
        background: #fff;
        border: 1px solid #a6a6a6;
        transition: border-color 0.2s, box-shadow 0.2s;
      }
      body .ui-dropdown:not(.ui-state-disabled):hover {
        border-color: #212121;
      }
      body .ui-dropdown:not(.ui-state-disabled).ui-state-focus {
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
        border-color: #007ad9;
      }
      body .ui-dropdown .ui-dropdown-label {
        padding-right: 2em;
      }
      body .ui-dropdown .ui-dropdown-label .ui-placeholder {
        color: #666;
      }
      body .ui-dropdown .ui-dropdown-trigger {
        background-color: #fff;
        width: 2em;
        line-height: 2em;
        text-align: center;
        padding: 0;
        color: #848484;
      }
      body .ui-dropdown .ui-dropdown-clear-icon {
        color: #848484;
      }
      body .ui-dropdown.ui-dropdown-clearable .ui-dropdown-label {
        padding-right: 4em;
      }
      body .ui-dropdown-panel {
        padding: 0;
        border: 1px solid #c8c8c8;
        background-color: #fff;
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
      }
      body .ui-dropdown-panel .ui-dropdown-filter-container {
        padding: 0.429em 0.857em;
        border-bottom: 1px solid #eaeaea;
        color: #333;
        background-color: #fff;
        margin: 0;
      }
      body
        .ui-dropdown-panel
        .ui-dropdown-filter-container
        .ui-dropdown-filter {
        width: 100%;
        padding-right: 2em;
      }
      body
        .ui-dropdown-panel
        .ui-dropdown-filter-container
        .ui-dropdown-filter-icon {
        top: 50%;
        margin-top: -0.5em;
        right: 1.357em;
        color: #007ad9;
      }
      body .ui-dropdown-panel .ui-dropdown-items {
        padding: 0;
      }
      body .ui-dropdown-panel .ui-dropdown-items .ui-dropdown-item,
      body .ui-dropdown-panel .ui-dropdown-items .ui-dropdown-item-group {
        margin: 0;
        padding: 0.429em 0.857em;
        border: 0;
        color: #333;
        background-color: transparent;
        border-radius: 0;
      }
      body
        .ui-dropdown-panel
        .ui-dropdown-items
        .ui-dropdown-item-group.ui-state-highlight,
      body
        .ui-dropdown-panel
        .ui-dropdown-items
        .ui-dropdown-item.ui-state-highlight {
        color: #fff;
        background-color: #007ad9;
      }
      body
        .ui-dropdown-panel
        .ui-dropdown-items
        .ui-dropdown-item-group:not(.ui-state-highlight):not(
          .ui-state-disabled
        ):hover,
      body
        .ui-dropdown-panel
        .ui-dropdown-items
        .ui-dropdown-item:not(.ui-state-highlight):not(
          .ui-state-disabled
        ):hover {
        color: #333;
        background-color: #eaeaea;
      }
      body p-dropdown.ng-dirty.ng-invalid > .ui-dropdown {
        border: 1px solid #a80000;
      }
      body .ui-inputtext {
        font-size: 14px;
        color: #333;
        background: #fff;
        padding: 0.429em;
        border: 1px solid #a6a6a6;
        transition: border-color 0.2s, box-shadow 0.2s;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      body .ui-inputtext.ng-dirty.ng-invalid {
        border: 1px solid #a80000;
      }
      body .ui-inputtext:enabled:hover:not(.ui-state-error) {
        border-color: #212121;
      }
      body .ui-inputtext:enabled:focus:not(.ui-state-error) {
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
        border-color: #007ad9;
      }
      body p-inputmask.ng-dirty.ng-invalid > .ui-inputtext,
      body p-listbox.ng-dirty.ng-invalid .ui-inputtext {
        border: 1px solid #a80000;
      }
      body .ui-radiobutton {
        display: inline-block;
        vertical-align: middle;
        margin: 0;
        width: 20px;
        height: 20px;
      }
      body .ui-radiobutton .ui-radiobutton-box {
        border: 1px solid #a6a6a6;
        background-color: #fff;
        width: 20px;
        height: 20px;
        text-align: center;
        position: relative;
        transition: background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
        border-radius: 50%;
      }
      body
        .ui-radiobutton
        .ui-radiobutton-box:not(.ui-state-disabled):not(
          .ui-state-active
        ):hover {
        border-color: #212121;
      }
      body .ui-radiobutton .ui-radiobutton-box.ui-state-focus {
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
        border-color: #007ad9;
      }
      body .ui-radiobutton .ui-radiobutton-box.ui-state-active {
        border-color: #007ad9;
        background-color: #007ad9;
        color: #fff;
      }
      body
        .ui-radiobutton
        .ui-radiobutton-box.ui-state-active
        .ui-radiobutton-icon {
        background-color: #fff;
      }
      body
        .ui-radiobutton
        .ui-radiobutton-box.ui-state-active:not(.ui-state-disabled):hover {
        border-color: #005b9f;
        background-color: #005b9f;
        color: #fff;
      }
      body .ui-radiobutton .ui-radiobutton-box .ui-radiobutton-icon {
        background: transparent;
        width: 10px;
        height: 10px;
        display: inline-block;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -5px;
        margin-top: -5px;
        transition: background-color 0.2s;
        border-radius: 50%;
      }
      body .ui-radiobutton .ui-radiobutton-box .ui-radiobutton-icon:before {
        display: none;
      }
      body .ui-radiobutton-label {
        margin: 0 0 0 0.5em;
      }
      body p-radiobutton.ng-dirty.ng-invalid .ui-radiobutton-box {
        border: 1px solid #a80000;
      }
      body .ui-slider {
        background-color: #c8c8c8;
        border: 0;
      }
      body .ui-slider.ui-slider-horizontal {
        height: 0.286em;
      }
      body .ui-slider.ui-slider-horizontal .ui-slider-handle {
        top: 50%;
        margin-top: -0.5715em;
      }
      body .ui-slider.ui-slider-vertical {
        width: 0.286em;
      }
      body .ui-slider.ui-slider-vertical .ui-slider-handle {
        left: 50%;
        margin-left: -0.5715em;
      }
      body .ui-slider .ui-slider-handle {
        height: 1.143em;
        width: 1.143em;
        background-color: #fff;
        border: 2px solid #666;
        border-radius: 100%;
        transition: box-shadow 0.2s;
      }
      body .ui-slider .ui-slider-handle:focus {
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
      }
      body .ui-slider .ui-slider-range {
        background-color: #007ad9;
      }
      body .ui-slider:not(.ui-state-disabled) .ui-slider-handle:hover {
        background-color: 2px solid #666;
        border: 2px solid #007ad9;
      }
      body .ui-slider.ui-slider-animate .ui-slider-handle {
        transition: box-shadow 0.2s, left 0.2s;
      }
      body .ui-accordion .ui-accordion-header {
        margin-bottom: 2px;
      }
      body .ui-accordion .ui-accordion-header a {
        padding: 0.571em 1em;
        border: 1px solid #c8c8c8;
        color: #333;
        background-color: #f4f4f4;
        font-weight: 700;
        border-radius: 3px;
        transition: background-color 0.2s, box-shadow 0.2s;
      }
      body .ui-accordion .ui-accordion-header a .ui-accordion-toggle-icon {
        color: #848484;
      }
      body .ui-accordion .ui-accordion-header a:focus {
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
      }
      body
        .ui-accordion
        .ui-accordion-header:not(.ui-state-active):not(.ui-state-disabled):hover
        a {
        background-color: #dbdbdb;
        border: 1px solid #dbdbdb;
        color: #333;
      }
      body
        .ui-accordion
        .ui-accordion-header:not(.ui-state-active):not(.ui-state-disabled):hover
        a
        .ui-accordion-toggle-icon {
        color: #333;
      }
      body
        .ui-accordion
        .ui-accordion-header:not(.ui-state-disabled).ui-state-active
        a {
        background-color: #007ad9;
        border: 1px solid #007ad9;
        color: #fff;
      }
      body
        .ui-accordion
        .ui-accordion-header:not(.ui-state-disabled).ui-state-active
        a
        .ui-accordion-toggle-icon {
        color: #fff;
      }
      body
        .ui-accordion
        .ui-accordion-header:not(.ui-state-disabled).ui-state-active:hover
        a {
        border: 1px solid #005b9f;
        background-color: #005b9f;
        color: #fff;
      }
      body
        .ui-accordion
        .ui-accordion-header:not(.ui-state-disabled).ui-state-active:hover
        a
        .ui-accordion-toggle-icon {
        color: #fff;
      }
      body .ui-accordion .ui-accordion-content {
        border: 1px solid #c8c8c8;
        background-color: #fff;
        color: #333;
        padding: 0.571em 1em;
      }
      body .ui-card {
        background-color: #fff;
        color: #333;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2),
          0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 2px 1px -1px rgba(0, 0, 0, 0.12);
      }
      body .ui-dialog {
        padding: 0;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      }
      body .ui-dialog .ui-dialog-titlebar {
        background-color: #f4f4f4;
        color: #333;
        padding: 1em;
        font-weight: 700;
        border: 1px solid #c8c8c8;
        border-bottom: 0;
      }
      body .ui-dialog .ui-dialog-titlebar .ui-dialog-title {
        margin: 0;
        float: none;
      }
      body .ui-dialog .ui-dialog-titlebar .ui-dialog-titlebar-icon {
        color: #848484;
        border: 0;
        padding: 0;
        margin-left: 0.5em;
        transition: color 0.2s, background-color 0.2s, box-shadow 0.2s;
      }
      body .ui-dialog .ui-dialog-titlebar .ui-dialog-titlebar-icon span {
        width: auto;
      }
      body .ui-dialog .ui-dialog-titlebar .ui-dialog-titlebar-icon:hover {
        color: #333;
      }
      body .ui-dialog .ui-dialog-titlebar .ui-dialog-titlebar-icon:focus {
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
      }
      body .ui-dialog .ui-dialog-content,
      body .ui-dialog .ui-dialog-footer {
        background-color: #fff;
        color: #333;
        border: 1px solid #c8c8c8;
        padding: 0.571em 1em;
      }
      body .ui-dialog .ui-dialog-footer {
        margin: 0;
        text-align: right;
        position: relative;
        border-top: 0;
      }
      body .ui-dialog .ui-dialog-footer button {
        margin: 0 0.5em 0 0;
        width: auto;
      }
      body .ui-dialog.ui-confirm-dialog .ui-dialog-content {
        padding: 1.5em;
      }
      body .ui-dialog.ui-confirm-dialog .ui-dialog-content > span {
        float: none;
        display: inline-block;
        vertical-align: middle;
        line-height: 14px;
        margin: 0;
      }
      body .ui-dialog.ui-confirm-dialog .ui-dialog-content > span.ui-icon {
        margin-right: 0.35em;
        font-size: 16px;
      }
      body .ui-overlaypanel {
        background-color: #fff;
        color: #333;
        padding: 0;
        border: 1px solid #c8c8c8;
        border-radius: 0;
      }
      body .ui-overlaypanel .ui-overlaypanel-content {
        padding: 0.571em 1em;
      }
      body .ui-overlaypanel .ui-overlaypanel-close {
        background-color: #007ad9;
        color: #fff;
        width: 1.538em;
        height: 1.538em;
        line-height: 1.538em;
        text-align: center;
        position: absolute;
        top: -0.769em;
        right: -0.769em;
        transition: color 0.2s, background-color 0.2s, box-shadow 0.2s;
      }
      body .ui-overlaypanel .ui-overlaypanel-close .ui-overlaypanel-close-icon {
        line-height: inherit;
      }
      body .ui-overlaypanel .ui-overlaypanel-close:hover {
        background-color: #005b9f;
        color: #fff;
      }
      body .ui-overlaypanel .ui-overlaypanel-close:focus {
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
      }
      body .ui-overlaypanel:after {
        border-color: hsla(0, 0%, 100%, 0) hsla(0, 0%, 100%, 0) #fff;
      }
      body .ui-overlaypanel:before {
        border-color: hsla(0, 0%, 78.4%, 0) hsla(0, 0%, 78.4%, 0) #c8c8c8;
      }
      body .ui-overlaypanel.ui-overlaypanel-flipped:after {
        border-top-color: #fff;
      }
      body .ui-overlaypanel.ui-overlaypanel-flipped:before {
        border-top-color: #c8c8c8;
      }
      body .ui-sidebar {
        background-color: #fff;
        color: #333;
        padding: 0.571em 1em;
        border: 1px solid #c8c8c8;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      }
      body .ui-sidebar .ui-sidebar-close {
        color: #848484;
      }
      body .ui-sidebar .ui-sidebar-close:hover {
        color: #333;
      }
      body .ui-tooltip .ui-tooltip-text {
        background-color: #333;
        color: #fff;
        padding: 0.429em;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      }
      body .ui-tooltip.ui-tooltip-right .ui-tooltip-arrow {
        border-right-color: #333;
      }
      body .ui-tooltip.ui-tooltip-left .ui-tooltip-arrow {
        border-left-color: #333;
      }
      body .ui-tooltip.ui-tooltip-top .ui-tooltip-arrow {
        border-top-color: #333;
      }
      body .ui-tooltip.ui-tooltip-bottom .ui-tooltip-arrow {
        border-bottom-color: #333;
      }
      body .ui-progressbar {
        height: 1.2em;
        text-align: left;
        position: relative;
        overflow: hidden;
        background-color: #efefef;
      }
      body .ui-progressbar .ui-progressbar-value {
        border: 0;
        margin: 0;
        background: #3084c6;
      }
      body .ui-progressbar-determinate .ui-progressbar-value {
        height: 100%;
        width: 0;
        position: absolute;
        display: none;
        border: 0;
      }
      body .ui-progressbar-determinate .ui-progressbar-value-animate {
        transition: width 1s ease-in-out;
      }
      body {
        margin: 0 !important;
        font-size: 13px;
        line-height: 1.42857143;
      }
      .ui-widget {
        font-family: Muli, sans-serif !important;
        font-size: 1em !important;
      }
      body .pi {
        font-size: 0.8em;
      }
      .pi-sort-alt:before {
        content: "" !important;
      }
      .pi-sort-amount-up-alt:before {
        content: "" !important;
      }
      .pi-sort-amount-down:before {
        content: "" !important;
      }
      .pi-step-backward:before {
        content: "";
      }
      .pi-caret-left:before {
        content: "";
      }
      .pi-caret-right:before {
        content: "";
      }
      .pi-step-forward:before {
        content: "";
      }
      .pi-chevron-right:before {
        content: "";
      }
      .pi-chevron-down:before {
        content: "";
      }
      .ui-tabview .ui-tabview-nav > li.ui-state-default {
        outline: none !important;
      }
      .ui-tabview .ui-tabview-panels {
        border: none !important;
        background: transparent !important;
      }
      .ui-tabview .ui-corner-top {
        border: none !important;
      }
      .ui-tabview .ui-state-default:not(.ui-tabview-selected):focus {
        box-shadow: none !important;
      }
      .ui-tabview-selected,
      .ui-tabview-selected:focus {
        background: #fff !important;
        box-shadow: 0 -5px 5px 0 rgba(0, 0, 0, 0.1) !important;
      }
      .ui-tabview.ui-tabview-top .ui-tabview-nav {
        margin-bottom: 20px !important;
      }
      #dash-score-view .ui-tabview-panels,
      .ui-tabview.ui-tabview-top .ui-tabview-nav li a {
        padding: 0 !important;
      }
      .ui-accordion .ui-accordion-content,
      .ui-tabview-panels {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      .ui-accordion .ui-accordion-content {
        border: none !important;
      }
      .ui-accordion .ui-accordion-header a {
        border: none !important;
        display: flex !important;
        align-items: center !important;
        padding: 20px 12px !important;
      }
      .ui-accordion p-header {
        width: 100% !important;
      }
      .ui-accordion
        .ui-accordion-header:not(.ui-state-disabled).ui-state-active:hover
        a,
      .ui-accordion
        .ui-accordion-header:not(.ui-state-disabled).ui-state-active
        a {
        background: #fff !important;
        border: none !important;
        color: #707070 !important;
      }
      .ui-accordion .ui-accordion-header a:focus {
        box-shadow: none !important;
      }
      .ui-accordion .ui-accordion-header {
        margin-bottom: 10px !important;
      }
      .ui-accordion
        .ui-accordion-header:not(.ui-state-disabled)
        a
        .ui-accordion-toggle-icon {
        color: #1b1d1f !important;
        margin-right: 5px !important;
      }
      .ui-calendar-button {
        width: 2em !important;
        height: 51px !important;
        border: none !important;
      }
      .input-calendar {
        height: 50px;
      }
      .ui-inputswitch.ui-inputswitch-checked .ui-inputswitch-slider {
        background-color: #65b846 !important;
      }
      .ui-inputswitch .ui-inputswitch-slider {
        transition: background-color 0.2s, box-shadow 0.2s;
        border-radius: 30px;
        background-color: #65b846 !important;
      }
      .ui-inputswitch .ui-inputswitch-slider:before {
        background-color: #fff;
        height: 1.25em;
        width: 1.25em;
        left: 0.25em;
        bottom: 0.25em;
        border-radius: 50%;
        transition: 0.2s;
      }
      .ui-inputswitch.ui-inputswitch-checked .ui-inputswitch-slider:before {
        transform: translateX(1.25em);
      }
      .ui-inputswitch.ui-inputswitch-focus .ui-inputswitch-slider {
        background: #b7b7b7;
        outline: 0 none;
        outline-offset: 0;
        box-shadow: 0 0 0 0.2em #8dcdff;
      }
      .ui-inputswitch:not(.ui-state-disabled):hover .ui-inputswitch-slider {
        background-color: #b7b7b7;
      }
      .ui-inputswitch.ui-inputswitch-checked:not(.ui-state-disabled):hover
        .ui-inputswitch-slider {
        background-color: #116fbf;
      }
      .ui-inputswitch.ui-inputswitch-checked.ui-inputswitch-focus
        .ui-inputswitch-slider {
        background: #005b9f;
      }
      .ui-dialog .ui-dialog-titlebar {
        border: none !important;
      }
      .ui-dialog-radius .ui-dialog-content {
        border-radius: 10px;
      }
      .ui-radiobutton .ui-radiobutton-box.ui-state-active {
        border-color: #d1d1d1 !important;
        background-color: transparent !important;
      }
      .ui-radiobutton {
        width: auto !important;
        height: auto !important;
      }
      .form-control[disabled],
      .form-control[readonly],
      fieldset[disabled] .form-control {
        background-color: #fff;
      }
      .ui-dialog-mask {
        padding: 15px;
      }
      body .ui-inputtext:enabled:hover:not(.ui-state-error) {
        border: 1px solid #e6e6e6 !important;
      }
      .ui-widget,
      .ui-widget * {
        box-sizing: border-box;
      }
      .ui-helper-hidden {
        display: none !important;
      }
      .ui-helper-hidden-accessible {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
      .ui-helper-hidden-accessible input,
      .ui-helper-hidden-accessible select {
        transform: scale(0);
      }
      .ui-helper-reset {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        line-height: 1.3;
        text-decoration: none;
        font-size: 100%;
        list-style: none;
      }
      .ui-helper-clearfix:after,
      .ui-helper-clearfix:before {
        content: "";
        display: table;
      }
      .ui-helper-clearfix:after {
        clear: both;
      }
      .ui-helper-zfix {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        opacity: 0;
        filter: Alpha(Opacity=0);
      }
      .ui-state-disabled,
      .ui-state-disabled a {
        cursor: default !important;
      }
      .ui-icon {
        display: block;
        text-indent: -99999px;
        overflow: hidden;
        background-repeat: no-repeat;
      }
      .ui-widget-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
      .ui-resizable {
        position: relative;
      }
      .ui-resizable-handle {
        position: absolute;
        font-size: 0.1px;
        display: block;
      }
      .ui-resizable-autohide .ui-resizable-handle,
      .ui-resizable-disabled .ui-resizable-handle {
        display: none;
      }
      .ui-resizable-n {
        cursor: n-resize;
        height: 7px;
        width: 100%;
        top: -5px;
        left: 0;
      }
      .ui-resizable-s {
        cursor: s-resize;
        height: 7px;
        width: 100%;
        bottom: -5px;
        left: 0;
      }
      .ui-resizable-e {
        cursor: e-resize;
        width: 7px;
        right: -5px;
        top: 0;
        height: 100%;
      }
      .ui-resizable-w {
        cursor: w-resize;
        width: 7px;
        left: -5px;
        top: 0;
        height: 100%;
      }
      .ui-resizable-se {
        cursor: se-resize;
        width: 12px;
        height: 12px;
        right: 1px;
        bottom: 1px;
      }
      .ui-resizable-sw {
        cursor: sw-resize;
        width: 9px;
        height: 9px;
        left: -5px;
        bottom: -5px;
      }
      .ui-resizable-nw {
        cursor: nw-resize;
        width: 9px;
        height: 9px;
        left: -5px;
        top: -5px;
      }
      .ui-resizable-ne {
        cursor: ne-resize;
        width: 9px;
        height: 9px;
        right: -5px;
        top: -5px;
      }
      .ui-shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.3);
      }
      .ui-unselectable-text {
        -webkit-user-select: none;
        -moz-user-select: none;
        -o-user-select: none;
        user-select: none;
      }
      .ui-scrollbar-measure {
        width: 100px;
        height: 100px;
        overflow: scroll;
        position: absolute;
        top: -9999px;
      }
      .ui-overflow-hidden {
        overflow: hidden;
      }
      button,
      input[type="button"],
      input[type="file"]::-webkit-file-upload-button,
      input[type="reset"],
      input[type="submit"] {
        border-radius: 0;
      }
      .ui-link {
        text-align: left;
        background-color: transparent;
        margin: 0;
        padding: 0;
        border: none;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .p-sr-only {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        word-wrap: normal !important;
      }
      .ui-accordion {
        width: 100%;
      }
      .ui-accordion .ui-accordion-header {
        cursor: pointer;
        position: relative;
        margin-top: 1px;
      }
      .ui-accordion .ui-accordion-header a {
        padding: 0.5em;
      }
      .ui-accordion .ui-accordion-header-text,
      .ui-accordion .ui-accordion-toggle-icon {
        vertical-align: middle;
      }
      .ui-accordion .ui-accordion-content {
        padding: 1em;
        border-top: 0;
        overflow: visible;
      }
      .ui-accordion .ui-accordion-header.ui-state-disabled,
      .ui-accordion .ui-accordion-header.ui-state-disabled a {
        cursor: default;
      }
      .ui-accordion-content-wrapper-overflown {
        overflow: hidden;
      }
      .ui-rtl .ui-accordion .ui-accordion-header a {
        padding: 0.5em 2em 0.5em 0.5em;
      }
      .ui-rtl .ui-accordion .ui-accordion-toggle-icon {
        left: auto;
        right: 0.5em;
      }
      .ui-rtl .ui-accordion .ui-accordion-toggle-icon.pi-caret-right:before {
        content: "";
      }
      .ui-blockui {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
      .ui-blockui-document {
        position: fixed;
      }
      .ui-button {
        display: inline-block;
        position: relative;
        padding: 0;
        text-decoration: none !important;
        cursor: pointer;
        text-align: center;
        overflow: visible;
      }
      p-button {
        display: inline-block;
      }
      .ui-dialog-mask {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
        pointer-events: none;
      }
      .ui-dialog-mask.ui-widget-overlay {
        pointer-events: auto;
      }
      .ui-dialog-visible {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .ui-dialog {
        padding: 0;
        pointer-events: auto;
        display: flex;
        flex-direction: column;
        max-height: 90%;
        position: relative;
      }
      .ui-dialog .ui-dialog-titlebar {
        padding: 0.5em 0.75em;
        position: relative;
        border: 0;
        flex-shrink: 0;
      }
      .ui-dialog .ui-dialog-content {
        position: relative;
        border: 0;
        padding: 0.5em 0.75em;
        background: none;
        overflow-y: auto;
      }
      .ui-dialog-maximized {
        transition: none;
        transform: none;
        width: 100vw !important;
        max-height: 100%;
        height: 100%;
        left: 0 !important;
        top: 0 !important;
      }
      .ui-dialog-maximized .ui-dialog-content {
        flex-grow: 1;
      }
      .ui-dialog-resizable .ui-dialog-content {
        overflow: auto;
      }
      .ui-dialog-breakpoint {
        left: 0;
        width: 100%;
      }
      .ui-dialog .ui-resizable-se {
        width: 14px;
        height: 14px;
        right: 3px;
        bottom: 3px;
        position: absolute;
        font-size: 0.1px;
        display: block;
        cursor: se-resize;
      }
      .ui-dialog-draggable .ui-dialog-titlebar {
        cursor: move;
      }
      .ui-dialog .ui-dialog-titlebar-icons {
        float: right;
      }
      .ui-dialog .ui-dialog-titlebar-icons:after {
        content: "";
        display: table;
        clear: both;
      }
      .ui-dialog .ui-dialog-titlebar-icon {
        text-decoration: none;
        padding: 0.125em;
        cursor: pointer;
        display: inline-block;
        vertical-align: middle;
        border: 1px solid transparent;
      }
      .ui-dialog .ui-dialog-titlebar-icon span {
        display: block;
        margin: 0;
      }
      .ui-dialog-footer {
        padding: 1em;
        border-width: 1px 0 0;
        text-align: right;
        flex-shrink: 0;
      }
      .ui-dialog-bottom .ui-dialog,
      .ui-dialog-bottomleft .ui-dialog,
      .ui-dialog-bottomright .ui-dialog,
      .ui-dialog-left .ui-dialog,
      .ui-dialog-right .ui-dialog,
      .ui-dialog-top .ui-dialog,
      .ui-dialog-topleft .ui-dialog,
      .ui-dialog-topright .ui-dialog {
        margin: 0.75em;
        position: relative;
      }
      .ui-dialog-left {
        justify-content: flex-start;
      }
      .ui-dialog-right {
        justify-content: flex-end;
      }
      .ui-dialog-top {
        align-items: flex-start;
      }
      .ui-dialog-topleft {
        justify-content: flex-start;
        align-items: flex-start;
      }
      .ui-dialog-topright {
        justify-content: flex-end;
        align-items: flex-start;
      }
      .ui-dialog-bottom {
        align-items: flex-end;
      }
      .ui-dialog-bottomleft {
        justify-content: flex-start;
        align-items: flex-end;
      }
      .ui-dialog-bottomright {
        justify-content: flex-end;
        align-items: flex-end;
      }
      .ui-confirmdialog {
        width: 30em;
      }
      .ui-confirmdialog.ui-dialog .ui-dialog-content {
        padding: 1em 2em;
      }
      .ui-confirmdialog .ui-dialog-content .ui-confirmdialog-icon {
        font-size: 1.5em;
        margin-right: 0.5em;
        position: relative;
        top: 0.2em;
      }
      .ui-dialog-footer .ui-button {
        margin-right: 0.25em;
      }
      .ui-fluid .ui-dialog-footer .ui-button {
        width: auto;
      }
      .ui-rtl .ui-dialog .ui-dialog-titlebar-close {
        float: left;
      }
      .ui-rtl .ui-dialog .ui-dialog-buttonpane button {
        text-align: right;
      }
      @media screen and (max-width: 40em) {
        .ui-confirmdialog {
          width: 90%;
        }
      }
      .ui-dropdown .ui-dropdown-panel {
        min-width: 100%;
      }
      .ui-dropdown-panel {
        position: absolute;
        height: auto;
      }
      .ui-dropdown-panel .ui-dropdown-items-wrapper {
        overflow: auto;
      }
      .ui-dropdown-panel .ui-dropdown-item {
        font-weight: 400;
        border: 0;
        cursor: pointer;
        margin: 1px 0;
        padding: 0.125em 0.25em;
        text-align: left;
      }
      .ui-dropdown-panel .ui-dropdown-empty-message {
        padding: 0.5em;
      }
      .ui-dropdown-panel .ui-dropdown-item-group {
        font-weight: 700;
        cursor: default;
      }
      .ui-dropdown-panel .ui-dropdown-list {
        padding: 0.4em;
        border: 0;
      }
      .ui-dropdown-panel .ui-dropdown-filter {
        width: 100%;
        box-sizing: border-box;
        padding-right: 1.5em;
      }
      .ui-dropdown-panel .ui-dropdown-filter-container {
        position: relative;
        margin: 0;
        padding: 0.4em;
        display: inline-block;
        width: 100%;
      }
      .ui-dropdown-panel
        .ui-dropdown-filter-container
        .ui-dropdown-filter-icon {
        position: absolute;
        top: 0.8em;
        right: 1em;
      }
      .ui-fluid .fc .ui-button {
        width: auto;
      }
      .ui-fluid .ui-inputgroup p-inputmask {
        flex: 1 1 auto;
      }
      .ui-inputgroup p-inputmask:not(:first-child) .ui-inputtext {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left: 0;
      }
      .ui-inputgroup p-inputmask:not(:last-child) .ui-inputtext {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-right: 0;
      }
      .ui-inputnumber {
        display: inline-flex;
      }
      .ui-inputnumber-button {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
      }
      .ui-inputnumber-buttons-horizontal .ui-inputnumber-button .ui-button-text,
      .ui-inputnumber-buttons-stacked .ui-inputnumber-button .ui-button-text {
        display: none;
      }
      .ui-inputnumber-buttons-stacked .ui-inputnumber-button-up {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        padding: 0;
      }
      .ui-inputnumber-buttons-stacked .ui-inputnumber-input {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ui-inputnumber-buttons-stacked .ui-inputnumber-button-down {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;
        padding: 0;
      }
      .ui-inputnumber-buttons-stacked .ui-inputnumber-button-group {
        display: flex;
        flex-direction: column;
      }
      .ui-inputnumber-buttons-stacked
        .ui-inputnumber-button-group
        .ui-inputnumber-button {
        flex: 1 1 auto;
      }
      .ui-inputnumber-buttons-horizontal .ui-inputnumber-button-up {
        order: 3;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
      .ui-inputnumber-buttons-horizontal .ui-inputnumber-input {
        order: 2;
        border-radius: 0;
      }
      .ui-inputnumber-buttons-horizontal .ui-inputnumber-button-down {
        order: 1;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ui-inputnumber-buttons-vertical {
        flex-direction: column;
      }
      .ui-inputnumber-buttons-vertical
        .ui-inputnumber-button-up.ui-button-icon-only {
        order: 1;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        width: 100%;
      }
      .ui-inputnumber-buttons-vertical .ui-inputnumber-input {
        order: 2;
        border-radius: 0;
        text-align: center;
      }
      .ui-inputnumber-buttons-vertical
        .ui-inputnumber-button-down.ui-button-icon-only {
        order: 3;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        width: 100%;
      }
      .ui-inputnumber-input {
        flex: 1 1 auto;
      }
      .ui-fluid .ui-inputnumber {
        width: 100%;
      }
      .ui-fluid .ui-inputnumber .ui-inputnumber-input {
        width: 1%;
      }
      .ui-fluid .ui-inputnumber-buttons-vertical .ui-inputnumber-input {
        width: 100%;
      }
      .ui-inputswitch {
        position: relative;
        display: inline-block;
        width: 3em;
        height: 1.75em;
      }
      .ui-inputswitch-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transition: 0.3s;
        border-radius: 30px;
      }
      .ui-inputswitch-slider:before {
        position: absolute;
        content: "";
        height: 1.25em;
        width: 1.25em;
        left: 0.25em;
        bottom: 0.25em;
        border-radius: 50%;
        transition: 0.3s;
      }
      .ui-inputswitch-checked .ui-inputswitch-slider:before {
        transform: translateX(1.25em);
      }
      .ui-inputswitch-readonly .ui-inputswitch-slider,
      .ui-inputswitch.ui-state-disabled .ui-inputswitch-slider {
        cursor: default;
      }
      .ui-inputtext {
        margin: 0;
        outline: medium none;
        padding: 0.25em;
        font-weight: 400;
      }
      .ui-widget-content .ui-inputtext,
      .ui-widget-header .ui-inputtext {
        font-weight: 400;
      }
      .ui-fluid .ui-inputtext {
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
      }
      .ui-inputgroup {
        display: flex;
      }
      .ui-inputgroup .ui-inputgroup-addon {
        display: inline-block;
        text-align: center;
        min-width: 1.5em;
        padding: 0.25em;
        border-width: 1px;
        border-style: solid;
      }
      .ui-inputgroup .ui-inputgroup-addon + .ui-inputgroup-addon {
        border-left: 0;
      }
      .ui-inputgroup .ui-inputtext {
        padding-left: 0.5em;
      }
      .ui-inputgroup .ui-inputtext:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left-width: 0;
      }
      .ui-inputgroup .ui-inputtext:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-right-width: 0;
      }
      .ui-inputgroup .ui-button {
        margin-right: 0;
        border-radius: 0;
      }
      .ui-fluid .ui-inputgroup .ui-button {
        width: auto;
      }
      .ui-inputgroup > p-button:not(:first-child) > .ui-button {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
      .ui-inputgroup > p-button:not(:last-child) > .ui-button {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ui-fluid .ui-inputgroup .ui-inputtext {
        flex: 1 1 auto;
      }
      .ui-inputgroup .ui-chkbox,
      .ui-inputgroup .ui-radiobutton {
        margin-right: 0;
        vertical-align: bottom;
      }
      .ui-radiobutton {
        display: inline-block;
        cursor: pointer;
        vertical-align: middle;
        margin-right: 0.25em;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-select: none;
      }
      .ui-radiobutton-box {
        width: 1.125em;
        height: 1.125em;
        line-height: 1.125em;
        border-radius: 100%;
        text-align: center;
        position: relative;
      }
      .ui-radiobutton-icon {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 1em;
        height: 1em;
        margin-top: -0.5em;
        margin-left: -0.5em;
      }
      .ui-sidebar {
        position: fixed;
        padding: 0.5em 1em;
        transition: transform 0.3s;
      }
      .ui-sidebar-left {
        top: 0;
        left: 0;
        width: 20em;
        height: 100%;
        transform: translateX(-100%);
      }
      .ui-sidebar-right {
        top: 0;
        right: 0;
        width: 20em;
        height: 100%;
        transform: translateX(100%);
      }
      .ui-sidebar-top {
        top: 0;
        left: 0;
        width: 100%;
        height: 10em;
        transform: translateY(-100%);
      }
      .ui-sidebar-bottom {
        bottom: 0;
        left: 0;
        width: 100%;
        height: 10em;
        transform: translateY(100%);
      }
      .ui-sidebar-full {
        width: 100%;
        height: 100%;
        left: 0;
        transition: transform 0s;
      }
      .ui-sidebar-left.ui-sidebar-active,
      .ui-sidebar-right.ui-sidebar-active {
        transform: translateX(0);
      }
      .ui-sidebar-left.ui-sidebar-sm,
      .ui-sidebar-right.ui-sidebar-sm {
        width: 20em;
      }
      .ui-sidebar-left.ui-sidebar-md,
      .ui-sidebar-right.ui-sidebar-md {
        width: 40em;
      }
      .ui-sidebar-left.ui-sidebar-lg,
      .ui-sidebar-right.ui-sidebar-lg {
        width: 60em;
      }
      .ui-sidebar-bottom.ui-sidebar-active,
      .ui-sidebar-top.ui-sidebar-active {
        transform: translateY(0);
      }
      .ui-sidebar-bottom.ui-sidebar-sm,
      .ui-sidebar-top.ui-sidebar-sm {
        height: 10em;
      }
      .ui-sidebar-bottom.ui-sidebar-md,
      .ui-sidebar-top.ui-sidebar-md {
        height: 20em;
      }
      .ui-sidebar-bottom.ui-sidebar-lg,
      .ui-sidebar-top.ui-sidebar-lg {
        height: 30em;
      }
      .ui-sidebar-mask {
        position: fixed;
        width: 100%;
        height: 100%;
      }
      .ui-sidebar-close {
        float: right;
        cursor: pointer;
      }
      @media screen and (max-width: 64em) {
        .ui-sidebar-left.ui-sidebar-lg,
        .ui-sidebar-left.ui-sidebar-md,
        .ui-sidebar-right.ui-sidebar-lg,
        .ui-sidebar-right.ui-sidebar-md {
          width: 20em;
        }
      }
      .ui-slider {
        position: relative;
        text-align: left;
      }
      .ui-slider .ui-slider-handle {
        position: absolute;
        width: 1.2em;
        height: 1.2em;
        cursor: default;
        touch-action: none;
        z-index: 1;
      }
      .ui-slider .ui-slider-handle.ui-slider-handle-active {
        z-index: 2;
      }
      .ui-slider .ui-slider-range {
        position: absolute;
        font-size: 0.7em;
        display: block;
        border: 0;
        background-position: 0 0;
      }
      .ui-slider-horizontal {
        height: 0.8em;
      }
      .ui-slider-horizontal .ui-slider-handle {
        top: -0.25em;
        margin-left: -0.6em;
      }
      .ui-slider-horizontal .ui-slider-range {
        top: 0;
        height: 100%;
      }
      .ui-slider-horizontal .ui-slider-range-min {
        left: 0;
      }
      .ui-slider-horizontal .ui-slider-range-max {
        right: 0;
      }
      .ui-slider-vertical {
        width: 0.8em;
        height: 100px;
      }
      .ui-slider-vertical .ui-slider-handle {
        left: -0.25em;
        margin-left: 0;
        margin-bottom: -0.6em;
      }
      .ui-slider-vertical .ui-slider-range {
        left: 0;
        width: 100%;
      }
      .ui-slider-vertical .ui-slider-range-min {
        bottom: 0;
      }
      .ui-slider-vertical .ui-slider-range-max {
        top: 0;
      }
      .ui-slider-animate .ui-slider-handle {
        transition: left 0.3s;
      }
      .ui-spinner {
        display: inline-block;
        overflow: visible;
        padding: 0;
        position: relative;
        vertical-align: middle;
      }
      .ui-spinner-input {
        vertical-align: middle;
        padding-right: 1.5em;
      }
      .ui-spinner-button {
        cursor: default;
        display: block;
        height: 50%;
        margin: 0;
        overflow: hidden;
        padding: 0;
        position: absolute;
        right: 0;
        text-align: center;
        width: 1.5em;
      }
      .ui-tabview {
        padding: 0.25em;
      }
      .ui-tabview .ui-tabview-nav {
        margin: 0;
      }
      .ui-tabview .ui-tabview-nav li {
        list-style: none;
        float: left;
        position: relative;
        margin: 0 0.125em 1px 0;
        padding: 0;
        white-space: nowrap;
        display: block;
      }
      .ui-tabview .ui-tabview-nav li a {
        float: left;
        padding: 0.5em 1em;
      }
      .ui-tabview .ui-tabview-nav li.ui-state-disabled a,
      .ui-tabview .ui-tabview-nav li.ui-state-processing a,
      .ui-tabview .ui-tabview-nav li.ui-tabview-selected a {
        cursor: text;
      }
      .ui-tabview.ui-tabview-collapsible
        .ui-tabview-nav
        li.ui-tabview-selected
        a,
      .ui-tabview .ui-tabview-nav li a {
        cursor: pointer;
      }
      .ui-tabview .ui-tabview-panel {
        border-width: 0;
        padding: 1em;
        background: none;
      }
      .ui-tabview .ui-tabview-nav li .ui-tabview-left-icon {
        margin-right: 0.25em;
        vertical-align: middle;
      }
      .ui-tabview .ui-tabview-nav li .ui-tabview-right-icon {
        margin-left: 0.25em;
        vertical-align: middle;
      }
      .ui-tabview .ui-tabview-title {
        vertical-align: middle;
      }
      .ui-tabview .ui-tabview-nav li .ui-tabview-close {
        margin: 0.5em 0.3em 0 0;
        cursor: pointer;
      }
      .ui-tabview.ui-tabview-top > .ui-tabview-nav li {
        border-bottom: 0;
        top: 1px;
      }
      .ui-tabview.ui-tabview-top > .ui-tabview-nav {
        padding: 0.2em 0.2em 0;
      }
      .ui-tabview.ui-tabview-bottom > .ui-tabview-nav {
        padding: 0 0.2em 0.2em;
      }
      .ui-tabview.ui-tabview-bottom > .ui-tabview-nav li {
        border-top: 0;
      }
      .ui-tabview-left:after,
      .ui-tabview-right:after {
        clear: both;
        content: ".";
        display: block;
        height: 0;
        visibility: hidden;
      }
      .ui-tabview-left > .ui-tabview-nav {
        float: left;
        width: 25%;
        height: 300px;
        background-image: none;
        padding-top: 1px;
      }
      .ui-tabview-left > .ui-tabview-panels {
        float: right;
        width: 75%;
      }
      .ui-tabview.ui-tabview-left > .ui-tabview-nav li,
      .ui-tabview.ui-tabview-right > .ui-tabview-nav li {
        display: block;
        float: right;
        white-space: normal;
        width: 99%;
      }
      .ui-tabview.ui-tabview-left > .ui-tabview-nav li {
        margin: 0 0 1px;
        border-right: 0;
      }
      .ui-tabview.ui-tabview-right > .ui-tabview-nav {
        float: right;
        width: 25%;
        height: 300px;
        background-image: none;
        padding-top: 1px;
      }
      .ui-tabview.ui-tabview-right > .ui-tabview-panels {
        float: left;
        width: 75%;
      }
      .ui-tabview.ui-tabview-right > .ui-tabview-nav li {
        margin: 0 0 1px;
        border-left: 0;
      }
      .ui-rtl .ui-tabview .ui-tabview-nav li {
        float: right;
      }
      .ui-tooltip {
        position: absolute;
        display: none;
        padding: 0.25em 0.5em;
        max-width: 12.5em;
        pointer-events: none;
      }
      .ui-tooltip.ui-tooltip-left,
      .ui-tooltip.ui-tooltip-right {
        padding: 0 0.25em;
      }
      .ui-tooltip.ui-tooltip-bottom,
      .ui-tooltip.ui-tooltip-top {
        padding: 0.25em 0;
      }
      .ui-tooltip .ui-tooltip-text {
        padding: 0.125em 0.5em;
        background-color: #4c4c4c;
        color: #fff;
        white-space: pre-line;
      }
      .ui-tooltip-arrow {
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
      }
      .ui-tooltip-right .ui-tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -0.25em;
        border-width: 0.25em 0.25em 0.25em 0;
        border-right-color: #4c4c4c;
      }
      .ui-tooltip-left .ui-tooltip-arrow {
        top: 50%;
        right: 0;
        margin-top: -0.25em;
        border-width: 0.25em 0 0.25em 0.25em;
        border-left-color: #4c4c4c;
      }
      .ui-tooltip.ui-tooltip-top {
        padding: 0.25em 0;
      }
      .ui-tooltip-top .ui-tooltip-arrow {
        bottom: 0;
        left: 50%;
        margin-left: -0.25em;
        border-width: 0.25em 0.25em 0;
        border-top-color: #4c4c4c;
      }
      .ui-tooltip-bottom .ui-tooltip-arrow {
        top: 0;
        left: 50%;
        margin-left: -0.25em;
        border-width: 0 0.25em 0.25em;
        border-bottom-color: #4c4c4c;
      }
      .ui-tooltip-bottom-left .ui-tooltip-arrow {
        top: 0;
        left: 13%;
        margin-left: -0.25em;
        border-width: 0 0.25em 0.25em;
        border-bottom-color: #4c4c4c;
      }
      :root {
        --swiper-theme-color: #007aff;
      }
      .swiper-container {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1;
      }
      .swiper-container-vertical > .swiper-wrapper {
        flex-direction: column;
      }
      .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        box-sizing: content-box;
      }
      .swiper-container-android .swiper-slide,
      .swiper-wrapper {
        transform: translateZ(0);
      }
      .swiper-container-multirow > .swiper-wrapper {
        flex-wrap: wrap;
      }
      .swiper-container-multirow-column > .swiper-wrapper {
        flex-wrap: wrap;
        flex-direction: column;
      }
      .swiper-container-free-mode > .swiper-wrapper {
        transition-timing-function: ease-out;
        margin: 0 auto;
      }
      .swiper-container-pointer-events {
        touch-action: pan-y;
      }
      .swiper-container-pointer-events.swiper-container-vertical {
        touch-action: pan-x;
      }
      .swiper-slide {
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative;
        transition-property: transform;
      }
      .swiper-slide-invisible-blank {
        visibility: hidden;
      }
      .swiper-container-autoheight,
      .swiper-container-autoheight .swiper-slide {
        height: auto;
      }
      .swiper-container-autoheight .swiper-wrapper {
        align-items: flex-start;
        transition-property: transform, height;
      }
      .swiper-container-3d {
        perspective: 1200px;
      }
      .swiper-container-3d .swiper-cube-shadow,
      .swiper-container-3d .swiper-slide,
      .swiper-container-3d .swiper-slide-shadow-bottom,
      .swiper-container-3d .swiper-slide-shadow-left,
      .swiper-container-3d .swiper-slide-shadow-right,
      .swiper-container-3d .swiper-slide-shadow-top,
      .swiper-container-3d .swiper-wrapper {
        transform-style: preserve-3d;
      }
      .swiper-container-3d .swiper-slide-shadow-bottom,
      .swiper-container-3d .swiper-slide-shadow-left,
      .swiper-container-3d .swiper-slide-shadow-right,
      .swiper-container-3d .swiper-slide-shadow-top {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 10;
      }
      .swiper-container-3d .swiper-slide-shadow-left {
        background-image: linear-gradient(
          270deg,
          rgba(0, 0, 0, 0.5),
          transparent
        );
      }
      .swiper-container-3d .swiper-slide-shadow-right {
        background-image: linear-gradient(
          90deg,
          rgba(0, 0, 0, 0.5),
          transparent
        );
      }
      .swiper-container-3d .swiper-slide-shadow-top {
        background-image: linear-gradient(
          0deg,
          rgba(0, 0, 0, 0.5),
          transparent
        );
      }
      .swiper-container-3d .swiper-slide-shadow-bottom {
        background-image: linear-gradient(
          180deg,
          rgba(0, 0, 0, 0.5),
          transparent
        );
      }
      .swiper-container-css-mode > .swiper-wrapper {
        overflow: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
      }
      .swiper-container-css-mode > .swiper-wrapper::-webkit-scrollbar {
        display: none;
      }
      .swiper-container-css-mode > .swiper-wrapper > .swiper-slide {
        scroll-snap-align: start start;
      }
      .swiper-container-horizontal.swiper-container-css-mode > .swiper-wrapper {
        scroll-snap-type: x mandatory;
      }
      .swiper-container-vertical.swiper-container-css-mode > .swiper-wrapper {
        scroll-snap-type: y mandatory;
      }
      .swiper-pagination {
        position: absolute;
        text-align: center;
        transition: opacity 0.3s;
        transform: translateZ(0);
        z-index: 10;
      }
      .swiper-pagination.swiper-pagination-hidden {
        opacity: 0;
      }
      .swiper-container-horizontal > .swiper-pagination-bullets,
      .swiper-pagination-custom,
      .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%;
      }
      .swiper-pagination-bullets-dynamic {
        overflow: hidden;
        font-size: 0;
      }
      .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
        transform: scale(0.33);
        position: relative;
      }
      .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active,
      .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
        transform: scale(1);
      }
      .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
        transform: scale(0.66);
      }
      .swiper-pagination-bullets-dynamic
        .swiper-pagination-bullet-active-prev-prev {
        transform: scale(0.33);
      }
      .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
        transform: scale(0.66);
      }
      .swiper-pagination-bullets-dynamic
        .swiper-pagination-bullet-active-next-next {
        transform: scale(0.33);
      }
      .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        display: inline-block;
        border-radius: 50%;
        background: #000;
        opacity: 0.2;
      }
      button.swiper-pagination-bullet {
        border: none;
        margin: 0;
        padding: 0;
        box-shadow: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      .swiper-pagination-clickable .swiper-pagination-bullet {
        background: transparent;
        border: 2px solid #3084c6 !important;
        cursor: pointer;
        opacity: 1;
      }
      .swiper-pagination-bullet-active {
        background: #3084c6 !important;
        opacity: 1;
      }
      .swiper-container-vertical > .swiper-pagination-bullets {
        right: 10px;
        top: 50%;
        transform: translate3d(0, -50%, 0);
      }
      .swiper-container-vertical
        > .swiper-pagination-bullets
        .swiper-pagination-bullet {
        margin: 6px 0;
        display: block;
      }
      .swiper-container-vertical
        > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
      }
      .swiper-container-vertical
        > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic
        .swiper-pagination-bullet {
        display: inline-block;
        transition: transform 0.2s, top 0.2s;
      }
      .swiper-container-horizontal
        > .swiper-pagination-bullets
        .swiper-pagination-bullet {
        margin: 0 4px;
      }
      .swiper-container-horizontal
        > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
        left: 50%;
        transform: translateX(-50%);
        white-space: nowrap;
      }
      .swiper-container-horizontal
        > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic
        .swiper-pagination-bullet {
        transition: transform 0.2s, left 0.2s;
      }
      .swiper-container-horizontal.swiper-container-rtl
        > .swiper-pagination-bullets-dynamic
        .swiper-pagination-bullet {
        transition: transform 0.2s, right 0.2s;
      }
      .swiper-pagination-progressbar {
        background: rgba(0, 0, 0, 0.25);
        position: absolute;
      }
      .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: var(--swiper-pagination-color, var(--swiper-theme-color));
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transform: scale(0);
        transform-origin: left top;
      }
      .swiper-container-rtl
        .swiper-pagination-progressbar
        .swiper-pagination-progressbar-fill {
        transform-origin: right top;
      }
      .swiper-container-horizontal > .swiper-pagination-progressbar,
      .swiper-container-vertical
        > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
        width: 100%;
        height: 4px;
        left: 0;
        top: 0;
      }
      .swiper-container-horizontal
        > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,
      .swiper-container-vertical > .swiper-pagination-progressbar {
        width: 4px;
        height: 100%;
        left: 0;
        top: 0;
      }
      .swiper-pagination-white {
        --swiper-pagination-color: #fff;
      }
      .swiper-pagination-black {
        --swiper-pagination-color: #000;
      }
      .swiper-pagination-lock {
        display: none;
      }
      @font-face {
        font-family: Font Awesome\5 Brands;
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url(/assets/fonts/fa-brands-400.eot);
        src: url(/assets/fonts/fa-brands-400.eot?#iefix)
            format("embedded-opentype"),
          url(/assets/fonts/fa-brands-400.woff2) format("woff2"),
          url(/assets/fonts/fa-brands-400.woff) format("woff"),
          url(/assets/fonts/fa-brands-400.ttf) format("truetype"),
          url(/assets/fonts/fa-brands-400.svg#fontawesome) format("svg");
      }
      @font-face {
        font-family: Font Awesome\5 Free;
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url(/assets/fonts/fa-regular-400.eot);
        src: url(/assets/fonts/fa-regular-400.eot?#iefix)
            format("embedded-opentype"),
          url(/assets/fonts/fa-regular-400.woff2) format("woff2"),
          url(/assets/fonts/fa-regular-400.woff) format("woff"),
          url(/assets/fonts/fa-regular-400.ttf) format("truetype"),
          url(/assets/fonts/fa-regular-400.svg#fontawesome) format("svg");
      }
      @font-face {
        font-family: Font Awesome\5 Free;
        font-style: normal;
        font-weight: 900;
        font-display: block;
        src: url(/assets/fonts/fa-solid-900.eot);
        src: url(/assets/fonts/fa-solid-900.eot?#iefix)
            format("embedded-opentype"),
          url(/assets/fonts/fa-solid-900.woff2) format("woff2"),
          url(/assets/fonts/fa-solid-900.woff) format("woff"),
          url(/assets/fonts/fa-solid-900.ttf) format("truetype"),
          url(/assets/fonts/fa-solid-900.svg#fontawesome) format("svg");
      }
      .fa,
      .fab,
      .fad,
      .fal,
      .far,
      .fas {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
      }
      .fa-lg {
        font-size: 1.33333em;
        line-height: 0.75em;
        vertical-align: -0.0667em;
      }
      .fa-xs {
        font-size: 0.75em;
      }
      .fa-sm {
        font-size: 0.875em;
      }
      .fa-1x {
        font-size: 1em;
      }
      .fa-2x {
        font-size: 2em;
      }
      .fa-3x {
        font-size: 3em;
      }
      .fa-4x {
        font-size: 4em;
      }
      .fa-5x {
        font-size: 5em;
      }
      .fa-6x {
        font-size: 6em;
      }
      .fa-7x {
        font-size: 7em;
      }
      .fa-8x {
        font-size: 8em;
      }
      .fa-9x {
        font-size: 9em;
      }
      .fa-10x {
        font-size: 10em;
      }
      .fa-fw {
        text-align: center;
        width: 1.25em;
      }
      .fa-ul {
        list-style-type: none;
        margin-left: 2.5em;
        padding-left: 0;
      }
      .fa-ul > li {
        position: relative;
      }
      .fa-li {
        left: -2em;
        position: absolute;
        text-align: center;
        width: 2em;
        line-height: inherit;
      }
      .fa-border {
        border: 0.08em solid #eee;
        border-radius: 0.1em;
        padding: 0.2em 0.25em 0.15em;
      }
      .fa-pull-left {
        float: left;
      }
      .fa-pull-right {
        float: right;
      }
      .fa.fa-pull-left,
      .fab.fa-pull-left,
      .fal.fa-pull-left,
      .far.fa-pull-left,
      .fas.fa-pull-left {
        margin-right: 0.3em;
      }
      .fa.fa-pull-right,
      .fab.fa-pull-right,
      .fal.fa-pull-right,
      .far.fa-pull-right,
      .fas.fa-pull-right {
        margin-left: 0.3em;
      }
      .fa-spin {
        animation: fa-spin 2s linear infinite;
      }
      .fa-pulse {
        animation: fa-spin 1s steps(8) infinite;
      }
      @keyframes fa-spin {
        0% {
          transform: rotate(0deg);
        }
        to {
          transform: rotate(1turn);
        }
      }
      .fa-rotate-90 {
        transform: rotate(90deg);
      }
      .fa-rotate-180 {
        transform: rotate(180deg);
      }
      .fa-rotate-270 {
        transform: rotate(270deg);
      }
      .fa-flip-horizontal {
        transform: scaleX(-1);
      }
      .fa-flip-vertical {
        transform: scaleY(-1);
      }
      .fa-flip-both,
      .fa-flip-horizontal.fa-flip-vertical {
        transform: scale(-1);
      }
      :root .fa-flip-both,
      :root .fa-flip-horizontal,
      :root .fa-flip-vertical,
      :root .fa-rotate-90,
      :root .fa-rotate-180,
      :root .fa-rotate-270 {
        filter: none;
      }
      .fa-stack {
        display: inline-block;
        height: 2em;
        line-height: 2em;
        position: relative;
        vertical-align: middle;
        width: 2.5em;
      }
      .fa-stack-1x,
      .fa-stack-2x {
        left: 0;
        position: absolute;
        text-align: center;
        width: 100%;
      }
      .fa-stack-1x {
        line-height: inherit;
      }
      .fa-stack-2x {
        font-size: 2em;
      }
      .fa-inverse {
        color: #fff;
      }
      .fa-arrow-alt-circle-down:before {
        content: "";
      }
      .fa-arrow-alt-circle-left:before {
        content: "";
      }
      .fa-arrow-alt-circle-right:before {
        content: "";
      }
      .fa-arrow-alt-circle-up:before {
        content: "";
      }
      .fa-arrow-circle-down:before {
        content: "";
      }
      .fa-arrow-circle-left:before {
        content: "";
      }
      .fa-arrow-circle-right:before {
        content: "";
      }
      .fa-arrow-circle-up:before {
        content: "";
      }
      .fa-arrow-down:before {
        content: "";
      }
      .fa-arrow-left:before {
        content: "";
      }
      .fa-arrow-right:before {
        content: "";
      }
      .fa-arrow-up:before {
        content: "";
      }
      .fa-arrows-alt:before {
        content: "";
      }
      .fa-arrows-alt-h:before {
        content: "";
      }
      .fa-arrows-alt-v:before {
        content: "";
      }
      .fa-bars:before {
        content: "";
      }
      .fa-check:before {
        content: "";
      }
      .fa-check-circle:before {
        content: "";
      }
      .fa-check-double:before {
        content: "";
      }
      .fa-check-square:before {
        content: "";
      }
      .fa-chevron-circle-down:before {
        content: "";
      }
      .fa-chevron-circle-left:before {
        content: "";
      }
      .fa-chevron-circle-right:before {
        content: "";
      }
      .fa-chevron-circle-up:before {
        content: "";
      }
      .fa-chevron-down:before {
        content: "";
      }
      .fa-chevron-left:before {
        content: "";
      }
      .fa-chevron-right:before {
        content: "";
      }
      .fa-chevron-up:before {
        content: "";
      }
      .fa-circle:before {
        content: "";
      }
      .fa-circle-notch:before {
        content: "";
      }
      .fa-envelope:before {
        content: "";
      }
      .fa-envelope-open:before {
        content: "";
      }
      .fa-envelope-open-text:before {
        content: "";
      }
      .fa-envelope-square:before {
        content: "";
      }
      .fa-exclamation:before {
        content: "";
      }
      .fa-exclamation-circle:before {
        content: "";
      }
      .fa-exclamation-triangle:before {
        content: "";
      }
      .fa-eye:before {
        content: "";
      }
      .fa-eye-dropper:before {
        content: "";
      }
      .fa-eye-slash:before {
        content: "";
      }
      .fa-gift:before {
        content: "";
      }
      .fa-gifts:before {
        content: "";
      }
      .fa-info:before {
        content: "";
      }
      .fa-info-circle:before {
        content: "";
      }
      .fa-spinner:before {
        content: "";
      }
      .fa-square:before {
        content: "";
      }
      .fa-square-full:before {
        content: "";
      }
      .fa-square-root-alt:before {
        content: "";
      }
      .fa-squarespace:before {
        content: "";
      }
      .fa-times:before {
        content: "";
      }
      .fa-times-circle:before {
        content: "";
      }
      .fa-trophy:before {
        content: "";
      }
      .fa-volume-down:before {
        content: "";
      }
      .fa-volume-mute:before {
        content: "";
      }
      .fa-volume-off:before {
        content: "";
      }
      .fa-volume-up:before {
        content: "";
      }
      .fa-plus:before {
        content: "";
      }
      .fa-search:before {
        content: "";
      }
      .sr-only {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
      .sr-only-focusable:active,
      .sr-only-focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto;
      }
      .fab {
        font-family: Font Awesome\5 Brands, sans-serif;
        font-weight: 400;
      }
      .far {
        font-weight: 400;
      }
      .fa,
      .far,
      .fas {
        font-family: Font Awesome\5 Free, sans-serif;
      }
      .fa-thin {
        -webkit-text-stroke: 0.5px #fff;
      }
      .inline-block {
        display: inline-block;
      }
      .flex {
        display: flex;
      }
      .flex-wrap {
        flex-wrap: wrap;
      }
      .flex-col {
        flex-direction: column;
      }
      .flex-row {
        flex-direction: row;
      }
      .flex-column {
        flex-direction: column;
      }
      .flex-row-reverse {
        flex-direction: row-reverse;
      }
      .flex-column-reverse {
        flex-direction: column-reverse;
      }
      .justify-start {
        justify-content: flex-start;
      }
      .justify-end {
        justify-content: flex-end;
      }
      .justify-center {
        justify-content: center;
      }
      .justify-between {
        justify-content: space-between;
      }
      .justify-around {
        justify-content: space-around;
      }
      .content-center {
        align-content: center;
      }
      .content-start {
        align-content: flex-start;
      }
      .content-end {
        align-content: flex-end;
      }
      .content-between {
        align-content: space-between;
      }
      .content-around {
        align-content: space-around;
      }
      .items-start {
        align-items: flex-start;
      }
      .items-end {
        align-items: flex-end;
      }
      .items-center {
        align-items: center;
      }
      .items-baseline {
        align-items: baseline;
      }
      .items-stretch {
        align-items: stretch;
      }
      .uppercase {
        text-transform: uppercase;
      }
      .lowercase {
        text-transform: lowercase;
      }
      .capitalize {
        text-transform: capitalize;
      }
      .normal-case {
        text-transform: none;
      }
      .cursor-pointer {
        cursor: pointer;
      }
      .flex-1 {
        flex: 1 1 0%;
      }
      .w-full {
        width: 100%;
      }
      .h-full {
        height: 100%;
      }
      .absolute {
        position: absolute;
      }
      .relative {
        position: relative;
      }
      .top-0 {
        top: 0 !important;
      }
      .right-0 {
        right: 0 !important;
      }
      .bottom-0 {
        bottom: 0 !important;
      }
      .left-0 {
        left: 0 !important;
      }
      .padding-0 {
        padding: 0 !important;
      }
      .text-overflow-ellipsis {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .position-relative {
        position: relative;
      }
      .position-absolute {
        position: absolute;
      }
      .text-black {
        color: #000;
      }
      .text-decoration {
        text-decoration: underline;
      }
      .border-radius-10 {
        border-radius: 10px;
      }
      .opacity-0 {
        opacity: 0 !important;
      }
      .opacity-20 {
        opacity: 0.2 !important;
      }
      .opacity-50 {
        opacity: 0.5 !important;
      }
      .back-btn,
      .next-btn {
        width: 100%;
        font-size: 20px;
        border-radius: 30px;
        cursor: pointer;
        background-image: none;
        border: none;
        outline: none;
      }
      .back-btn.btn-small,
      .next-btn.btn-small {
        height: 32px !important;
        line-height: 32px !important;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.2px;
      }
      .round-btn {
        cursor: pointer;
        background-image: none;
        border: none;
        outline: none;
        height: 40px !important;
        line-height: 40px !important;
        border-radius: 20px !important;
        padding: 0 !important;
        width: 40px !important;
        text-align: center;
      }
      .back-btn[disabled],
      .next-btn[disabled],
      .round-btn[disabled] {
        opacity: 0.4;
      }
      .back-btn {
        border: 1px solid #bcd2e3;
        color: #444;
        background-color: #fff;
      }
      .back-btn.btn-sm {
        height: 40px !important;
        line-height: 40px !important;
        border-radius: 20px;
        padding: 0 30px !important;
        width: auto;
      }
      .overflow-auto {
        overflow: auto !important;
      }
      .overflow-hidden {
        overflow: hidden !important;
      }
      .color-white {
        color: #fff;
      }
      .color-white-imp {
        color: #fff !important;
      }
      .bg-white {
        background-color: #fff;
      }
      .bg-white-imp {
        background-color: #fff !important;
      }
      .color-black {
        color: #000;
      }
      .color-black-imp {
        color: #000 !important;
      }
      .bg-black {
        background-color: #000;
      }
      .bg-black-imp {
        background-color: #000 !important;
      }
      .height-0 {
        height: 0 !important;
      }
      .line-height-14,
      button.line-height-14 {
        line-height: 14px !important;
      }
      .color-gray-100 {
        color: rgba(68, 68, 68, 0.12156862745098039);
      }
      .color-gray-100-imp {
        color: rgba(68, 68, 68, 0.12156862745098039) !important;
      }
      .bg-gray-100 {
        background-color: rgba(68, 68, 68, 0.12156862745098039);
      }
      .bg-gray-100-imp {
        background-color: rgba(68, 68, 68, 0.12156862745098039) !important;
      }
      .border-gray-100 {
        border-color: rgba(68, 68, 68, 0.12156862745098039);
      }
      .border-gray-100-imp {
        border-color: rgba(68, 68, 68, 0.12156862745098039) !important;
      }
      .color-gray-200 {
        color: rgba(0, 43, 78, 0.14901960784313725);
      }
      .color-gray-200-imp {
        color: rgba(0, 43, 78, 0.14901960784313725) !important;
      }
      .bg-gray-200 {
        background-color: rgba(0, 43, 78, 0.14901960784313725);
      }
      .bg-gray-200-imp {
        background-color: rgba(0, 43, 78, 0.14901960784313725) !important;
      }
      .border-gray-200 {
        border-color: rgba(0, 43, 78, 0.14901960784313725);
      }
      .border-gray-200-imp {
        border-color: rgba(0, 43, 78, 0.14901960784313725) !important;
      }
      .color-gray-300 {
        color: #ccc;
      }
      .color-gray-300-imp {
        color: #ccc !important;
      }
      .bg-gray-300 {
        background-color: #ccc;
      }
      .bg-gray-300-imp {
        background-color: #ccc !important;
      }
      .border-gray-300 {
        border-color: #ccc;
      }
      .border-gray-300-imp {
        border-color: #ccc !important;
      }
      .color-gray-400 {
        color: #e5e9ed;
      }
      .color-gray-400-imp {
        color: #e5e9ed !important;
      }
      .bg-gray-400 {
        background-color: #e5e9ed;
      }
      .bg-gray-400-imp {
        background-color: #e5e9ed !important;
      }
      .border-gray-400 {
        border-color: #e5e9ed;
      }
      .border-gray-400-imp {
        border-color: #e5e9ed !important;
      }
      .color-gray-500 {
        color: #d8d8d8;
      }
      .color-gray-500-imp {
        color: #d8d8d8 !important;
      }
      .bg-gray-500 {
        background-color: #d8d8d8;
      }
      .bg-gray-500-imp {
        background-color: #d8d8d8 !important;
      }
      .border-gray-500 {
        border-color: #d8d8d8;
      }
      .border-gray-500-imp {
        border-color: #d8d8d8 !important;
      }
      .color-gray-600 {
        color: rgba(0, 0, 0, 0.1607843137254902);
      }
      .color-gray-600-imp {
        color: rgba(0, 0, 0, 0.1607843137254902) !important;
      }
      .bg-gray-600 {
        background-color: rgba(0, 0, 0, 0.1607843137254902);
      }
      .bg-gray-600-imp {
        background-color: rgba(0, 0, 0, 0.1607843137254902) !important;
      }
      .border-gray-600 {
        border-color: rgba(0, 0, 0, 0.1607843137254902);
      }
      .border-gray-600-imp {
        border-color: rgba(0, 0, 0, 0.1607843137254902) !important;
      }
      .color-gray-700 {
        color: rgba(68, 68, 68, 0.14901960784313725);
      }
      .color-gray-700-imp {
        color: rgba(68, 68, 68, 0.14901960784313725) !important;
      }
      .bg-gray-700 {
        background-color: rgba(68, 68, 68, 0.14901960784313725);
      }
      .bg-gray-700-imp {
        background-color: rgba(68, 68, 68, 0.14901960784313725) !important;
      }
      .border-gray-700 {
        border-color: rgba(68, 68, 68, 0.14901960784313725);
      }
      .border-gray-700-imp {
        border-color: rgba(68, 68, 68, 0.14901960784313725) !important;
      }
      .color-gray-800 {
        color: #95989a;
      }
      .color-gray-800-imp {
        color: #95989a !important;
      }
      .bg-gray-800 {
        background-color: #95989a;
      }
      .bg-gray-800-imp {
        background-color: #95989a !important;
      }
      .border-gray-800 {
        border-color: #95989a;
      }
      .border-gray-800-imp {
        border-color: #95989a !important;
      }
      .color-gray-900 {
        color: #63707b;
      }
      .color-gray-900-imp {
        color: #63707b !important;
      }
      .bg-gray-900 {
        background-color: #63707b;
      }
      .bg-gray-900-imp {
        background-color: #63707b !important;
      }
      .border-gray-900 {
        border-color: #63707b;
      }
      .border-gray-900-imp {
        border-color: #63707b !important;
      }
      .color-gray-1000 {
        color: #707070;
      }
      .color-gray-1000-imp {
        color: #707070 !important;
      }
      .bg-gray-1000 {
        background-color: #707070;
      }
      .bg-gray-1000-imp {
        background-color: #707070 !important;
      }
      .border-gray-1000 {
        border-color: #707070;
      }
      .border-gray-1000-imp {
        border-color: #707070 !important;
      }
      .color-gray-1100 {
        color: #666;
      }
      .color-gray-1100-imp {
        color: #666 !important;
      }
      .bg-gray-1100 {
        background-color: #666;
      }
      .bg-gray-1100-imp {
        background-color: #666 !important;
      }
      .border-gray-1100 {
        border-color: #666;
      }
      .border-gray-1100-imp {
        border-color: #666 !important;
      }
      .color-gray-1200 {
        color: #444;
      }
      .color-gray-1200-imp {
        color: #444 !important;
      }
      .bg-gray-1200 {
        background-color: #444;
      }
      .bg-gray-1200-imp {
        background-color: #444 !important;
      }
      .border-gray-1200 {
        border-color: #444;
      }
      .border-gray-1200-imp {
        border-color: #444 !important;
      }
      .color-gray-1300 {
        color: #050404;
      }
      .color-gray-1300-imp {
        color: #050404 !important;
      }
      .bg-gray-1300 {
        background-color: #050404;
      }
      .bg-gray-1300-imp {
        background-color: #050404 !important;
      }
      .border-gray-1300 {
        border-color: #050404;
      }
      .border-gray-1300-imp {
        border-color: #050404 !important;
      }
      .color-gray-1400 {
        color: #a7bac6;
      }
      .color-gray-1400-imp {
        color: #a7bac6 !important;
      }
      .bg-gray-1400 {
        background-color: #a7bac6;
      }
      .bg-gray-1400-imp {
        background-color: #a7bac6 !important;
      }
      .border-gray-1400 {
        border-color: #a7bac6;
      }
      .border-gray-1400-imp {
        border-color: #a7bac6 !important;
      }
      .color-gray-1500 {
        color: #f9f9f9;
      }
      .color-gray-1500-imp {
        color: #f9f9f9 !important;
      }
      .bg-gray-1500 {
        background-color: #f9f9f9;
      }
      .bg-gray-1500-imp {
        background-color: #f9f9f9 !important;
      }
      .border-gray-1500 {
        border-color: #f9f9f9;
      }
      .border-gray-1500-imp {
        border-color: #f9f9f9 !important;
      }
      .color-gray-1600 {
        color: #f4f4f4;
      }
      .color-gray-1600-imp {
        color: #f4f4f4 !important;
      }
      .bg-gray-1600 {
        background-color: #f4f4f4;
      }
      .bg-gray-1600-imp {
        background-color: #f4f4f4 !important;
      }
      .border-gray-1600 {
        border-color: #f4f4f4;
      }
      .border-gray-1600-imp {
        border-color: #f4f4f4 !important;
      }
      .color-gray-1700 {
        color: #888;
      }
      .color-gray-1700-imp {
        color: #888 !important;
      }
      .bg-gray-1700 {
        background-color: #888;
      }
      .bg-gray-1700-imp {
        background-color: #888 !important;
      }
      .border-gray-1700 {
        border-color: #888;
      }
      .border-gray-1700-imp {
        border-color: #888 !important;
      }
      .color-gray-1800 {
        color: rgba(0, 0, 0, 0.30196078431372547);
      }
      .color-gray-1800-imp {
        color: rgba(0, 0, 0, 0.30196078431372547) !important;
      }
      .bg-gray-1800 {
        background-color: rgba(0, 0, 0, 0.30196078431372547);
      }
      .bg-gray-1800-imp {
        background-color: rgba(0, 0, 0, 0.30196078431372547) !important;
      }
      .border-gray-1800 {
        border-color: rgba(0, 0, 0, 0.30196078431372547);
      }
      .border-gray-1800-imp {
        border-color: rgba(0, 0, 0, 0.30196078431372547) !important;
      }
      .color-gray-1900 {
        color: #fafaf8;
      }
      .color-gray-1900-imp {
        color: #fafaf8 !important;
      }
      .bg-gray-1900 {
        background-color: #fafaf8;
      }
      .bg-gray-1900-imp {
        background-color: #fafaf8 !important;
      }
      .border-gray-1900 {
        border-color: #fafaf8;
      }
      .border-gray-1900-imp {
        border-color: #fafaf8 !important;
      }
      .color-gray-2000 {
        color: #333;
      }
      .color-gray-2000-imp {
        color: #333 !important;
      }
      .bg-gray-2000 {
        background-color: #333;
      }
      .bg-gray-2000-imp {
        background-color: #333 !important;
      }
      .border-gray-2000 {
        border-color: #333;
      }
      .border-gray-2000-imp {
        border-color: #333 !important;
      }
      .color-gray-2100 {
        color: #e6e6e6;
      }
      .color-gray-2100-imp {
        color: #e6e6e6 !important;
      }
      .bg-gray-2100 {
        background-color: #e6e6e6;
      }
      .bg-gray-2100-imp {
        background-color: #e6e6e6 !important;
      }
      .border-gray-2100 {
        border-color: #e6e6e6;
      }
      .border-gray-2100-imp {
        border-color: #e6e6e6 !important;
      }
      .color-gray-2200 {
        color: #f1f1f1;
      }
      .color-gray-2200-imp {
        color: #f1f1f1 !important;
      }
      .bg-gray-2200 {
        background-color: #f1f1f1;
      }
      .bg-gray-2200-imp {
        background-color: #f1f1f1 !important;
      }
      .border-gray-2200 {
        border-color: #f1f1f1;
      }
      .border-gray-2200-imp {
        border-color: #f1f1f1 !important;
      }
      .color-gray-2300 {
        color: #eee;
      }
      .color-gray-2300-imp {
        color: #eee !important;
      }
      .bg-gray-2300 {
        background-color: #eee;
      }
      .bg-gray-2300-imp {
        background-color: #eee !important;
      }
      .border-gray-2300 {
        border-color: #eee;
      }
      .border-gray-2300-imp {
        border-color: #eee !important;
      }
      .color-gray-2400 {
        color: #4a4a4a;
      }
      .color-gray-2400-imp {
        color: #4a4a4a !important;
      }
      .bg-gray-2400 {
        background-color: #4a4a4a;
      }
      .bg-gray-2400-imp {
        background-color: #4a4a4a !important;
      }
      .border-gray-2400 {
        border-color: #4a4a4a;
      }
      .border-gray-2400-imp {
        border-color: #4a4a4a !important;
      }
      .color-green-100 {
        color: #f0f9ec;
      }
      .color-green-100-imp {
        color: #f0f9ec !important;
      }
      .bg-green-100 {
        background-color: #f0f9ec;
      }
      .bg-green-100-imp {
        background-color: #f0f9ec !important;
      }
      .border-green-100 {
        border-color: #f0f9ec;
      }
      .border-green-100-imp {
        border-color: #f0f9ec !important;
      }
      .color-green-200 {
        color: #b5dea2;
      }
      .color-green-200-imp {
        color: #b5dea2 !important;
      }
      .bg-green-200 {
        background-color: #b5dea2;
      }
      .bg-green-200-imp {
        background-color: #b5dea2 !important;
      }
      .border-green-200 {
        border-color: #b5dea2;
      }
      .border-green-200-imp {
        border-color: #b5dea2 !important;
      }
      .color-green-300 {
        color: #6bbd44;
      }
      .color-green-300-imp {
        color: #6bbd44 !important;
      }
      .bg-green-300 {
        background-color: #6bbd44;
      }
      .bg-green-300-imp {
        background-color: #6bbd44 !important;
      }
      .border-green-300 {
        border-color: #6bbd44;
      }
      .border-green-300-imp {
        border-color: #6bbd44 !important;
      }
      .color-green-400 {
        color: #6cbe45;
      }
      .color-green-400-imp {
        color: #6cbe45 !important;
      }
      .bg-green-400 {
        background-color: #6cbe45;
      }
      .bg-green-400-imp {
        background-color: #6cbe45 !important;
      }
      .border-green-400 {
        border-color: #6cbe45;
      }
      .border-green-400-imp {
        border-color: #6cbe45 !important;
      }
      .color-green-500 {
        color: #a9ee89;
      }
      .color-green-500-imp {
        color: #a9ee89 !important;
      }
      .bg-green-500 {
        background-color: #a9ee89;
      }
      .bg-green-500-imp {
        background-color: #a9ee89 !important;
      }
      .border-green-500 {
        border-color: #a9ee89;
      }
      .border-green-500-imp {
        border-color: #a9ee89 !important;
      }
      .color-green-600 {
        color: #1e9776;
      }
      .color-green-600-imp {
        color: #1e9776 !important;
      }
      .bg-green-600 {
        background-color: #1e9776;
      }
      .bg-green-600-imp {
        background-color: #1e9776 !important;
      }
      .border-green-600 {
        border-color: #1e9776;
      }
      .border-green-600-imp {
        border-color: #1e9776 !important;
      }
      .color-green-700 {
        color: #8af258;
      }
      .color-green-700-imp {
        color: #8af258 !important;
      }
      .bg-green-700 {
        background-color: #8af258;
      }
      .bg-green-700-imp {
        background-color: #8af258 !important;
      }
      .border-green-700 {
        border-color: #8af258;
      }
      .border-green-700-imp {
        border-color: #8af258 !important;
      }
      .color-green-800 {
        color: #4ca721;
      }
      .color-green-800-imp {
        color: #4ca721 !important;
      }
      .bg-green-800 {
        background-color: #4ca721;
      }
      .bg-green-800-imp {
        background-color: #4ca721 !important;
      }
      .border-green-800 {
        border-color: #4ca721;
      }
      .border-green-800-imp {
        border-color: #4ca721 !important;
      }
      .color-blue-100 {
        color: #f4f9fc;
      }
      .color-blue-100-imp {
        color: #f4f9fc !important;
      }
      .bg-blue-100 {
        background-color: #f4f9fc;
      }
      .bg-blue-100-imp {
        background-color: #f4f9fc !important;
      }
      .border-blue-100 {
        border-color: #f4f9fc;
      }
      .border-blue-100-imp {
        border-color: #f4f9fc !important;
      }
      .color-blue-200 {
        color: #ecf4ff;
      }
      .color-blue-200-imp {
        color: #ecf4ff !important;
      }
      .bg-blue-200 {
        background-color: #ecf4ff;
      }
      .bg-blue-200-imp {
        background-color: #ecf4ff !important;
      }
      .border-blue-200 {
        border-color: #ecf4ff;
      }
      .border-blue-200-imp {
        border-color: #ecf4ff !important;
      }
      .color-blue-300 {
        color: #d6e3ee;
      }
      .color-blue-300-imp {
        color: #d6e3ee !important;
      }
      .bg-blue-300 {
        background-color: #d6e3ee;
      }
      .bg-blue-300-imp {
        background-color: #d6e3ee !important;
      }
      .border-blue-300 {
        border-color: #d6e3ee;
      }
      .border-blue-300-imp {
        border-color: #d6e3ee !important;
      }
      .color-blue-400 {
        color: #a7bac6;
      }
      .color-blue-400-imp {
        color: #a7bac6 !important;
      }
      .bg-blue-400 {
        background-color: #a7bac6;
      }
      .bg-blue-400-imp {
        background-color: #a7bac6 !important;
      }
      .border-blue-400 {
        border-color: #a7bac6;
      }
      .border-blue-400-imp {
        border-color: #a7bac6 !important;
      }
      .color-blue-500 {
        color: #97c1e2;
      }
      .color-blue-500-imp {
        color: #97c1e2 !important;
      }
      .bg-blue-500 {
        background-color: #97c1e2;
      }
      .bg-blue-500-imp {
        background-color: #97c1e2 !important;
      }
      .border-blue-500 {
        border-color: #97c1e2;
      }
      .border-blue-500-imp {
        border-color: #97c1e2 !important;
      }
      .color-blue-600 {
        color: #2f84c6;
      }
      .color-blue-600-imp {
        color: #2f84c6 !important;
      }
      .bg-blue-600 {
        background-color: #2f84c6;
      }
      .bg-blue-600-imp {
        background-color: #2f84c6 !important;
      }
      .border-blue-600 {
        border-color: #2f84c6;
      }
      .border-blue-600-imp {
        border-color: #2f84c6 !important;
      }
      .color-blue-700 {
        color: #3084c6;
      }
      .color-blue-700-imp {
        color: #3084c6 !important;
      }
      .bg-blue-700 {
        background-color: #3084c6;
      }
      .bg-blue-700-imp {
        background-color: #3084c6 !important;
      }
      .border-blue-700 {
        border-color: #3084c6;
      }
      .border-blue-700-imp {
        border-color: #3084c6 !important;
      }
      .color-blue-800 {
        color: #002b4e;
      }
      .color-blue-800-imp {
        color: #002b4e !important;
      }
      .bg-blue-800 {
        background-color: #002b4e;
      }
      .bg-blue-800-imp {
        background-color: #002b4e !important;
      }
      .border-blue-800 {
        border-color: #002b4e;
      }
      .border-blue-800-imp {
        border-color: #002b4e !important;
      }
      .color-blue-900 {
        color: #022644;
      }
      .color-blue-900-imp {
        color: #022644 !important;
      }
      .bg-blue-900 {
        background-color: #022644;
      }
      .bg-blue-900-imp {
        background-color: #022644 !important;
      }
      .border-blue-900 {
        border-color: #022644;
      }
      .border-blue-900-imp {
        border-color: #022644 !important;
      }
      .color-blue-1000 {
        color: #3ea3ed;
      }
      .color-blue-1000-imp {
        color: #3ea3ed !important;
      }
      .bg-blue-1000 {
        background-color: #3ea3ed;
      }
      .bg-blue-1000-imp {
        background-color: #3ea3ed !important;
      }
      .border-blue-1000 {
        border-color: #3ea3ed;
      }
      .border-blue-1000-imp {
        border-color: #3ea3ed !important;
      }
      .color-blue-1100 {
        color: #1f94fc;
      }
      .color-blue-1100-imp {
        color: #1f94fc !important;
      }
      .bg-blue-1100 {
        background-color: #1f94fc;
      }
      .bg-blue-1100-imp {
        background-color: #1f94fc !important;
      }
      .border-blue-1100 {
        border-color: #1f94fc;
      }
      .border-blue-1100-imp {
        border-color: #1f94fc !important;
      }
      .color-blue-1200 {
        color: rgba(0, 43, 78, 0.2);
      }
      .color-blue-1200-imp {
        color: rgba(0, 43, 78, 0.2) !important;
      }
      .bg-blue-1200 {
        background-color: rgba(0, 43, 78, 0.2);
      }
      .bg-blue-1200-imp {
        background-color: rgba(0, 43, 78, 0.2) !important;
      }
      .border-blue-1200 {
        border-color: rgba(0, 43, 78, 0.2);
      }
      .border-blue-1200-imp {
        border-color: rgba(0, 43, 78, 0.2) !important;
      }
      .color-blue-1300 {
        color: rgba(24, 86, 131, 0.9725490196078431);
      }
      .color-blue-1300-imp {
        color: rgba(24, 86, 131, 0.9725490196078431) !important;
      }
      .bg-blue-1300 {
        background-color: rgba(24, 86, 131, 0.9725490196078431);
      }
      .bg-blue-1300-imp {
        background-color: rgba(24, 86, 131, 0.9725490196078431) !important;
      }
      .border-blue-1300 {
        border-color: rgba(24, 86, 131, 0.9725490196078431);
      }
      .border-blue-1300-imp {
        border-color: rgba(24, 86, 131, 0.9725490196078431) !important;
      }
      .color-blue-1400 {
        color: #99d5ff;
      }
      .color-blue-1400-imp {
        color: #99d5ff !important;
      }
      .bg-blue-1400 {
        background-color: #99d5ff;
      }
      .bg-blue-1400-imp {
        background-color: #99d5ff !important;
      }
      .border-blue-1400 {
        border-color: #99d5ff;
      }
      .border-blue-1400-imp {
        border-color: #99d5ff !important;
      }
      .color-blue-1500 {
        color: #1e8dd6;
      }
      .color-blue-1500-imp {
        color: #1e8dd6 !important;
      }
      .bg-blue-1500 {
        background-color: #1e8dd6;
      }
      .bg-blue-1500-imp {
        background-color: #1e8dd6 !important;
      }
      .border-blue-1500 {
        border-color: #1e8dd6;
      }
      .border-blue-1500-imp {
        border-color: #1e8dd6 !important;
      }
      .color-yellow-100 {
        color: #fcfbf3;
      }
      .color-yellow-100-imp {
        color: #fcfbf3 !important;
      }
      .bg-yellow-100 {
        background-color: #fcfbf3;
      }
      .bg-yellow-100-imp {
        background-color: #fcfbf3 !important;
      }
      .border-yellow-100 {
        border-color: #fcfbf3;
      }
      .border-yellow-100-imp {
        border-color: #fcfbf3 !important;
      }
      .color-yellow-200 {
        color: #fef2cf;
      }
      .color-yellow-200-imp {
        color: #fef2cf !important;
      }
      .bg-yellow-200 {
        background-color: #fef2cf;
      }
      .bg-yellow-200-imp {
        background-color: #fef2cf !important;
      }
      .border-yellow-200 {
        border-color: #fef2cf;
      }
      .border-yellow-200-imp {
        border-color: #fef2cf !important;
      }
      .color-yellow-300 {
        color: #f8b600;
      }
      .color-yellow-300-imp {
        color: #f8b600 !important;
      }
      .bg-yellow-300 {
        background-color: #f8b600;
      }
      .bg-yellow-300-imp {
        background-color: #f8b600 !important;
      }
      .border-yellow-300 {
        border-color: #f8b600;
      }
      .border-yellow-300-imp {
        border-color: #f8b600 !important;
      }
      .color-yellow-400 {
        color: #fff8e5;
      }
      .color-yellow-400-imp {
        color: #fff8e5 !important;
      }
      .bg-yellow-400 {
        background-color: #fff8e5;
      }
      .bg-yellow-400-imp {
        background-color: #fff8e5 !important;
      }
      .border-yellow-400 {
        border-color: #fff8e5;
      }
      .border-yellow-400-imp {
        border-color: #fff8e5 !important;
      }
      .color-yellow-500 {
        color: #f7b228;
      }
      .color-yellow-500-imp {
        color: #f7b228 !important;
      }
      .bg-yellow-500 {
        background-color: #f7b228;
      }
      .bg-yellow-500-imp {
        background-color: #f7b228 !important;
      }
      .border-yellow-500 {
        border-color: #f7b228;
      }
      .border-yellow-500-imp {
        border-color: #f7b228 !important;
      }
      .color-yellow-600 {
        color: #f8df00;
      }
      .color-yellow-600-imp {
        color: #f8df00 !important;
      }
      .bg-yellow-600 {
        background-color: #f8df00;
      }
      .bg-yellow-600-imp {
        background-color: #f8df00 !important;
      }
      .border-yellow-600 {
        border-color: #f8df00;
      }
      .border-yellow-600-imp {
        border-color: #f8df00 !important;
      }
      .color-yellow-700 {
        color: #eab44e;
      }
      .color-yellow-700-imp {
        color: #eab44e !important;
      }
      .bg-yellow-700 {
        background-color: #eab44e;
      }
      .bg-yellow-700-imp {
        background-color: #eab44e !important;
      }
      .border-yellow-700 {
        border-color: #eab44e;
      }
      .border-yellow-700-imp {
        border-color: #eab44e !important;
      }
      .color-red-100 {
        color: #e01f21;
      }
      .color-red-100-imp {
        color: #e01f21 !important;
      }
      .bg-red-100 {
        background-color: #e01f21;
      }
      .bg-red-100-imp {
        background-color: #e01f21 !important;
      }
      .border-red-100 {
        border-color: #e01f21;
      }
      .border-red-100-imp {
        border-color: #e01f21 !important;
      }
      .color-red-200 {
        color: #b32541;
      }
      .color-red-200-imp {
        color: #b32541 !important;
      }
      .bg-red-200 {
        background-color: #b32541;
      }
      .bg-red-200-imp {
        background-color: #b32541 !important;
      }
      .border-red-200 {
        border-color: #b32541;
      }
      .border-red-200-imp {
        border-color: #b32541 !important;
      }
      .color-red-300 {
        color: #fee;
      }
      .color-red-300-imp {
        color: #fee !important;
      }
      .bg-red-300 {
        background-color: #fee;
      }
      .bg-red-300-imp {
        background-color: #fee !important;
      }
      .border-red-300 {
        border-color: #fee;
      }
      .border-red-300-imp {
        border-color: #fee !important;
      }
      .color-red-400 {
        color: #efc2af;
      }
      .color-red-400-imp {
        color: #efc2af !important;
      }
      .bg-red-400 {
        background-color: #efc2af;
      }
      .bg-red-400-imp {
        background-color: #efc2af !important;
      }
      .border-red-400 {
        border-color: #efc2af;
      }
      .border-red-400-imp {
        border-color: #efc2af !important;
      }
      .color-red-500 {
        color: #db6c6c;
      }
      .color-red-500-imp {
        color: #db6c6c !important;
      }
      .bg-red-500 {
        background-color: #db6c6c;
      }
      .bg-red-500-imp {
        background-color: #db6c6c !important;
      }
      .border-red-500 {
        border-color: #db6c6c;
      }
      .border-red-500-imp {
        border-color: #db6c6c !important;
      }
      .color-red-600 {
        color: #c73535;
      }
      .color-red-600-imp {
        color: #c73535 !important;
      }
      .bg-red-600 {
        background-color: #c73535;
      }
      .bg-red-600-imp {
        background-color: #c73535 !important;
      }
      .border-red-600 {
        border-color: #c73535;
      }
      .border-red-600-imp {
        border-color: #c73535 !important;
      }
      .color-red-700 {
        color: #d85050;
      }
      .color-red-700-imp {
        color: #d85050 !important;
      }
      .bg-red-700 {
        background-color: #d85050;
      }
      .bg-red-700-imp {
        background-color: #d85050 !important;
      }
      .border-red-700 {
        border-color: #d85050;
      }
      .border-red-700-imp {
        border-color: #d85050 !important;
      }
      .color-red-800 {
        color: #ffa42b;
      }
      .color-red-800-imp {
        color: #ffa42b !important;
      }
      .bg-red-800 {
        background-color: #ffa42b;
      }
      .bg-red-800-imp {
        background-color: #ffa42b !important;
      }
      .border-red-800 {
        border-color: #ffa42b;
      }
      .border-red-800-imp {
        border-color: #ffa42b !important;
      }
      .color-pink-100 {
        color: #fbeaea;
      }
      .color-pink-100-imp {
        color: #fbeaea !important;
      }
      .bg-pink-100 {
        background-color: #fbeaea;
      }
      .bg-pink-100-imp {
        background-color: #fbeaea !important;
      }
      .border-pink-100 {
        border-color: #fbeaea;
      }
      .border-pink-100-imp {
        border-color: #fbeaea !important;
      }
      .line-height-0 {
        line-height: 0;
      }
      .m-0 {
        margin: 0;
      }
      .mt-0 {
        margin-top: 0;
      }
      .mr-0 {
        margin-right: 0;
      }
      .mb-0 {
        margin-bottom: 0;
      }
      .ml-0 {
        margin-left: 0;
      }
      .p-0 {
        padding: 0;
      }
      .pt-0 {
        padding-top: 0;
      }
      .pr-0 {
        padding-right: 0;
      }
      .pb-0 {
        padding-bottom: 0;
      }
      .pl-0 {
        padding-left: 0;
      }
      .percent-height-0 {
        height: 0%;
      }
      .line-height-1 {
        line-height: 1px;
      }
      .m-1 {
        margin: 1px;
      }
      .mt-1 {
        margin-top: 1px;
      }
      .mr-1 {
        margin-right: 1px;
      }
      .mb-1 {
        margin-bottom: 1px;
      }
      .ml-1 {
        margin-left: 1px;
      }
      .p-1 {
        padding: 1px;
      }
      .pt-1 {
        padding-top: 1px;
      }
      .pr-1 {
        padding-right: 1px;
      }
      .pb-1 {
        padding-bottom: 1px;
      }
      .pl-1 {
        padding-left: 1px;
      }
      .font-1 {
        font-size: 1px;
      }
      .percent-height-1 {
        height: 1%;
      }
      .line-height-2 {
        line-height: 2px;
      }
      .m-2 {
        margin: 2px;
      }
      .mt-2 {
        margin-top: 2px;
      }
      .mr-2 {
        margin-right: 2px;
      }
      .mb-2 {
        margin-bottom: 2px;
      }
      .ml-2 {
        margin-left: 2px;
      }
      .p-2 {
        padding: 2px;
      }
      .pt-2 {
        padding-top: 2px;
      }
      .pr-2 {
        padding-right: 2px;
      }
      .pb-2 {
        padding-bottom: 2px;
      }
      .pl-2 {
        padding-left: 2px;
      }
      .font-2 {
        font-size: 2px;
      }
      .percent-height-2 {
        height: 2%;
      }
      .line-height-4 {
        line-height: 4px;
      }
      .m-4 {
        margin: 4px;
      }
      .mt-4 {
        margin-top: 4px;
      }
      .mr-4 {
        margin-right: 4px;
      }
      .mb-4 {
        margin-bottom: 4px;
      }
      .ml-4 {
        margin-left: 4px;
      }
      .p-4 {
        padding: 4px;
      }
      .pt-4 {
        padding-top: 4px;
      }
      .pr-4 {
        padding-right: 4px;
      }
      .pb-4 {
        padding-bottom: 4px;
      }
      .pl-4 {
        padding-left: 4px;
      }
      .font-4 {
        font-size: 4px;
      }
      .percent-height-4 {
        height: 4%;
      }
      .line-height-5 {
        line-height: 5px;
      }
      .m-5 {
        margin: 5px;
      }
      .mt-5 {
        margin-top: 5px;
      }
      .mr-5 {
        margin-right: 5px;
      }
      .mb-5 {
        margin-bottom: 5px;
      }
      .ml-5 {
        margin-left: 5px;
      }
      .p-5 {
        padding: 5px;
      }
      .pt-5 {
        padding-top: 5px;
      }
      .pr-5 {
        padding-right: 5px;
      }
      .pb-5 {
        padding-bottom: 5px;
      }
      .pl-5 {
        padding-left: 5px;
      }
      .font-5 {
        font-size: 5px;
      }
      .percent-height-5 {
        height: 5%;
      }
      .line-height-6 {
        line-height: 6px;
      }
      .m-6 {
        margin: 6px;
      }
      .mt-6 {
        margin-top: 6px;
      }
      .mr-6 {
        margin-right: 6px;
      }
      .mb-6 {
        margin-bottom: 6px;
      }
      .ml-6 {
        margin-left: 6px;
      }
      .p-6 {
        padding: 6px;
      }
      .pt-6 {
        padding-top: 6px;
      }
      .pr-6 {
        padding-right: 6px;
      }
      .pb-6 {
        padding-bottom: 6px;
      }
      .pl-6 {
        padding-left: 6px;
      }
      .font-6 {
        font-size: 6px;
      }
      .percent-height-6 {
        height: 6%;
      }
      .line-height-7 {
        line-height: 7px;
      }
      .m-7 {
        margin: 7px;
      }
      .mt-7 {
        margin-top: 7px;
      }
      .mr-7 {
        margin-right: 7px;
      }
      .mb-7 {
        margin-bottom: 7px;
      }
      .ml-7 {
        margin-left: 7px;
      }
      .p-7 {
        padding: 7px;
      }
      .pt-7 {
        padding-top: 7px;
      }
      .pr-7 {
        padding-right: 7px;
      }
      .pb-7 {
        padding-bottom: 7px;
      }
      .pl-7 {
        padding-left: 7px;
      }
      .font-7 {
        font-size: 7px;
      }
      .percent-height-7 {
        height: 7%;
      }
      .line-height-8 {
        line-height: 8px;
      }
      .m-8 {
        margin: 8px;
      }
      .mt-8 {
        margin-top: 8px;
      }
      .mr-8 {
        margin-right: 8px;
      }
      .mb-8 {
        margin-bottom: 8px;
      }
      .ml-8 {
        margin-left: 8px;
      }
      .p-8 {
        padding: 8px;
      }
      .pt-8 {
        padding-top: 8px;
      }
      .pr-8 {
        padding-right: 8px;
      }
      .pb-8 {
        padding-bottom: 8px;
      }
      .pl-8 {
        padding-left: 8px;
      }
      .font-8 {
        font-size: 8px;
      }
      .percent-height-8 {
        height: 8%;
      }
      .line-height-9 {
        line-height: 9px;
      }
      .m-9 {
        margin: 9px;
      }
      .mt-9 {
        margin-top: 9px;
      }
      .mr-9 {
        margin-right: 9px;
      }
      .mb-9 {
        margin-bottom: 9px;
      }
      .ml-9 {
        margin-left: 9px;
      }
      .p-9 {
        padding: 9px;
      }
      .pt-9 {
        padding-top: 9px;
      }
      .pr-9 {
        padding-right: 9px;
      }
      .pb-9 {
        padding-bottom: 9px;
      }
      .pl-9 {
        padding-left: 9px;
      }
      .font-9 {
        font-size: 9px;
      }
      .percent-height-9 {
        height: 9%;
      }
      .line-height-10 {
        line-height: 10px;
      }
      .m-10 {
        margin: 10px;
      }
      .mt-10 {
        margin-top: 10px;
      }
      .mr-10 {
        margin-right: 10px;
      }
      .mb-10 {
        margin-bottom: 10px;
      }
      .ml-10 {
        margin-left: 10px;
      }
      .p-10 {
        padding: 10px;
      }
      .pt-10 {
        padding-top: 10px;
      }
      .pr-10 {
        padding-right: 10px;
      }
      .pb-10 {
        padding-bottom: 10px;
      }
      .pl-10 {
        padding-left: 10px;
      }
      .font-10 {
        font-size: 10px;
      }
      .percent-height-10 {
        height: 10%;
      }
      .line-height-12 {
        line-height: 12px;
      }
      .m-12 {
        margin: 12px;
      }
      .mt-12 {
        margin-top: 12px;
      }
      .mr-12 {
        margin-right: 12px;
      }
      .mb-12 {
        margin-bottom: 12px;
      }
      .ml-12 {
        margin-left: 12px;
      }
      .p-12 {
        padding: 12px;
      }
      .pt-12 {
        padding-top: 12px;
      }
      .pr-12 {
        padding-right: 12px;
      }
      .pb-12 {
        padding-bottom: 12px;
      }
      .pl-12 {
        padding-left: 12px;
      }
      .font-12 {
        font-size: 12px;
      }
      .percent-height-12 {
        height: 12%;
      }
      .line-height-14 {
        line-height: 14px;
      }
      .m-14 {
        margin: 14px;
      }
      .mt-14 {
        margin-top: 14px;
      }
      .mr-14 {
        margin-right: 14px;
      }
      .mb-14 {
        margin-bottom: 14px;
      }
      .ml-14 {
        margin-left: 14px;
      }
      .p-14 {
        padding: 14px;
      }
      .pt-14 {
        padding-top: 14px;
      }
      .pr-14 {
        padding-right: 14px;
      }
      .pb-14 {
        padding-bottom: 14px;
      }
      .pl-14 {
        padding-left: 14px;
      }
      .font-14 {
        font-size: 14px;
      }
      .percent-height-14 {
        height: 14%;
      }
      .line-height-15 {
        line-height: 15px;
      }
      .m-15 {
        margin: 15px;
      }
      .mt-15 {
        margin-top: 15px;
      }
      .mr-15 {
        margin-right: 15px;
      }
      .mb-15 {
        margin-bottom: 15px;
      }
      .ml-15 {
        margin-left: 15px;
      }
      .p-15 {
        padding: 15px;
      }
      .pt-15 {
        padding-top: 15px;
      }
      .pr-15 {
        padding-right: 15px;
      }
      .pb-15 {
        padding-bottom: 15px;
      }
      .pl-15 {
        padding-left: 15px;
      }
      .font-15 {
        font-size: 15px;
      }
      .percent-height-15 {
        height: 15%;
      }
      .line-height-16 {
        line-height: 16px;
      }
      .m-16 {
        margin: 16px;
      }
      .mt-16 {
        margin-top: 16px;
      }
      .mr-16 {
        margin-right: 16px;
      }
      .mb-16 {
        margin-bottom: 16px;
      }
      .ml-16 {
        margin-left: 16px;
      }
      .p-16 {
        padding: 16px;
      }
      .pt-16 {
        padding-top: 16px;
      }
      .pr-16 {
        padding-right: 16px;
      }
      .pb-16 {
        padding-bottom: 16px;
      }
      .pl-16 {
        padding-left: 16px;
      }
      .font-16 {
        font-size: 16px;
      }
      .percent-height-16 {
        height: 16%;
      }
      .line-height-18 {
        line-height: 18px;
      }
      .m-18 {
        margin: 18px;
      }
      .mt-18 {
        margin-top: 18px;
      }
      .mr-18 {
        margin-right: 18px;
      }
      .mb-18 {
        margin-bottom: 18px;
      }
      .ml-18 {
        margin-left: 18px;
      }
      .p-18 {
        padding: 18px;
      }
      .pt-18 {
        padding-top: 18px;
      }
      .pr-18 {
        padding-right: 18px;
      }
      .pb-18 {
        padding-bottom: 18px;
      }
      .pl-18 {
        padding-left: 18px;
      }
      .font-18 {
        font-size: 18px;
      }
      .percent-height-18 {
        height: 18%;
      }
      .line-height-20 {
        line-height: 20px;
      }
      .m-20 {
        margin: 20px;
      }
      .mt-20 {
        margin-top: 20px;
      }
      .mr-20 {
        margin-right: 20px;
      }
      .mb-20 {
        margin-bottom: 20px;
      }
      .ml-20 {
        margin-left: 20px;
      }
      .p-20 {
        padding: 20px;
      }
      .pt-20 {
        padding-top: 20px;
      }
      .pr-20 {
        padding-right: 20px;
      }
      .pb-20 {
        padding-bottom: 20px;
      }
      .pl-20 {
        padding-left: 20px;
      }
      .font-20 {
        font-size: 20px;
      }
      .percent-height-20 {
        height: 20%;
      }
      .line-height-24 {
        line-height: 24px;
      }
      .m-24 {
        margin: 24px;
      }
      .mt-24 {
        margin-top: 24px;
      }
      .mr-24 {
        margin-right: 24px;
      }
      .mb-24 {
        margin-bottom: 24px;
      }
      .ml-24 {
        margin-left: 24px;
      }
      .p-24 {
        padding: 24px;
      }
      .pt-24 {
        padding-top: 24px;
      }
      .pr-24 {
        padding-right: 24px;
      }
      .pb-24 {
        padding-bottom: 24px;
      }
      .pl-24 {
        padding-left: 24px;
      }
      .font-24 {
        font-size: 24px;
      }
      .percent-height-24 {
        height: 24%;
      }
      .line-height-25 {
        line-height: 25px;
      }
      .m-25 {
        margin: 25px;
      }
      .mt-25 {
        margin-top: 25px;
      }
      .mr-25 {
        margin-right: 25px;
      }
      .mb-25 {
        margin-bottom: 25px;
      }
      .ml-25 {
        margin-left: 25px;
      }
      .p-25 {
        padding: 25px;
      }
      .pt-25 {
        padding-top: 25px;
      }
      .pr-25 {
        padding-right: 25px;
      }
      .pb-25 {
        padding-bottom: 25px;
      }
      .pl-25 {
        padding-left: 25px;
      }
      .font-25 {
        font-size: 25px;
      }
      .percent-height-25 {
        height: 25%;
      }
      .line-height-30 {
        line-height: 30px;
      }
      .m-30 {
        margin: 30px;
      }
      .mt-30 {
        margin-top: 30px;
      }
      .mr-30 {
        margin-right: 30px;
      }
      .mb-30 {
        margin-bottom: 30px;
      }
      .ml-30 {
        margin-left: 30px;
      }
      .p-30 {
        padding: 30px;
      }
      .pt-30 {
        padding-top: 30px;
      }
      .pr-30 {
        padding-right: 30px;
      }
      .pb-30 {
        padding-bottom: 30px;
      }
      .pl-30 {
        padding-left: 30px;
      }
      .font-30 {
        font-size: 30px;
      }
      .percent-height-30 {
        height: 30%;
      }
      .line-height-32 {
        line-height: 32px;
      }
      .m-32 {
        margin: 32px;
      }
      .mt-32 {
        margin-top: 32px;
      }
      .mr-32 {
        margin-right: 32px;
      }
      .mb-32 {
        margin-bottom: 32px;
      }
      .ml-32 {
        margin-left: 32px;
      }
      .p-32 {
        padding: 32px;
      }
      .pt-32 {
        padding-top: 32px;
      }
      .pr-32 {
        padding-right: 32px;
      }
      .pb-32 {
        padding-bottom: 32px;
      }
      .pl-32 {
        padding-left: 32px;
      }
      .font-32 {
        font-size: 32px;
      }
      .percent-height-32 {
        height: 32%;
      }
      .line-height-35 {
        line-height: 35px;
      }
      .m-35 {
        margin: 35px;
      }
      .mt-35 {
        margin-top: 35px;
      }
      .mr-35 {
        margin-right: 35px;
      }
      .mb-35 {
        margin-bottom: 35px;
      }
      .ml-35 {
        margin-left: 35px;
      }
      .p-35 {
        padding: 35px;
      }
      .pt-35 {
        padding-top: 35px;
      }
      .pr-35 {
        padding-right: 35px;
      }
      .pb-35 {
        padding-bottom: 35px;
      }
      .pl-35 {
        padding-left: 35px;
      }
      .font-35 {
        font-size: 35px;
      }
      .percent-height-35 {
        height: 35%;
      }
      .line-height-36 {
        line-height: 36px;
      }
      .m-36 {
        margin: 36px;
      }
      .mt-36 {
        margin-top: 36px;
      }
      .mr-36 {
        margin-right: 36px;
      }
      .mb-36 {
        margin-bottom: 36px;
      }
      .ml-36 {
        margin-left: 36px;
      }
      .p-36 {
        padding: 36px;
      }
      .pt-36 {
        padding-top: 36px;
      }
      .pr-36 {
        padding-right: 36px;
      }
      .pb-36 {
        padding-bottom: 36px;
      }
      .pl-36 {
        padding-left: 36px;
      }
      .font-36 {
        font-size: 36px;
      }
      .percent-height-36 {
        height: 36%;
      }
      .line-height-40 {
        line-height: 40px;
      }
      .m-40 {
        margin: 40px;
      }
      .mt-40 {
        margin-top: 40px;
      }
      .mr-40 {
        margin-right: 40px;
      }
      .mb-40 {
        margin-bottom: 40px;
      }
      .ml-40 {
        margin-left: 40px;
      }
      .p-40 {
        padding: 40px;
      }
      .pt-40 {
        padding-top: 40px;
      }
      .pr-40 {
        padding-right: 40px;
      }
      .pb-40 {
        padding-bottom: 40px;
      }
      .pl-40 {
        padding-left: 40px;
      }
      .font-40 {
        font-size: 40px;
      }
      .percent-height-40 {
        height: 40%;
      }
      .line-height-50 {
        line-height: 50px;
      }
      .m-50 {
        margin: 50px;
      }
      .mt-50 {
        margin-top: 50px;
      }
      .mr-50 {
        margin-right: 50px;
      }
      .mb-50 {
        margin-bottom: 50px;
      }
      .ml-50 {
        margin-left: 50px;
      }
      .p-50 {
        padding: 50px;
      }
      .pt-50 {
        padding-top: 50px;
      }
      .pr-50 {
        padding-right: 50px;
      }
      .pb-50 {
        padding-bottom: 50px;
      }
      .pl-50 {
        padding-left: 50px;
      }
      .font-50 {
        font-size: 50px;
      }
      .percent-height-50 {
        height: 50%;
      }
      .line-height-55 {
        line-height: 55px;
      }
      .m-55 {
        margin: 55px;
      }
      .mt-55 {
        margin-top: 55px;
      }
      .mr-55 {
        margin-right: 55px;
      }
      .mb-55 {
        margin-bottom: 55px;
      }
      .ml-55 {
        margin-left: 55px;
      }
      .p-55 {
        padding: 55px;
      }
      .pt-55 {
        padding-top: 55px;
      }
      .pr-55 {
        padding-right: 55px;
      }
      .pb-55 {
        padding-bottom: 55px;
      }
      .pl-55 {
        padding-left: 55px;
      }
      .font-55 {
        font-size: 55px;
      }
      .percent-height-55 {
        height: 55%;
      }
      .line-height-60 {
        line-height: 60px;
      }
      .m-60 {
        margin: 60px;
      }
      .mt-60 {
        margin-top: 60px;
      }
      .mr-60 {
        margin-right: 60px;
      }
      .mb-60 {
        margin-bottom: 60px;
      }
      .ml-60 {
        margin-left: 60px;
      }
      .p-60 {
        padding: 60px;
      }
      .pt-60 {
        padding-top: 60px;
      }
      .pr-60 {
        padding-right: 60px;
      }
      .pb-60 {
        padding-bottom: 60px;
      }
      .pl-60 {
        padding-left: 60px;
      }
      .font-60 {
        font-size: 60px;
      }
      .percent-height-60 {
        height: 60%;
      }
      .line-height-70 {
        line-height: 70px;
      }
      .m-70 {
        margin: 70px;
      }
      .mt-70 {
        margin-top: 70px;
      }
      .mr-70 {
        margin-right: 70px;
      }
      .mb-70 {
        margin-bottom: 70px;
      }
      .ml-70 {
        margin-left: 70px;
      }
      .p-70 {
        padding: 70px;
      }
      .pt-70 {
        padding-top: 70px;
      }
      .pr-70 {
        padding-right: 70px;
      }
      .pb-70 {
        padding-bottom: 70px;
      }
      .pl-70 {
        padding-left: 70px;
      }
      .font-70 {
        font-size: 70px;
      }
      .percent-height-70 {
        height: 70%;
      }
      .line-height-80 {
        line-height: 80px;
      }
      .m-80 {
        margin: 80px;
      }
      .mt-80 {
        margin-top: 80px;
      }
      .mr-80 {
        margin-right: 80px;
      }
      .mb-80 {
        margin-bottom: 80px;
      }
      .ml-80 {
        margin-left: 80px;
      }
      .p-80 {
        padding: 80px;
      }
      .pt-80 {
        padding-top: 80px;
      }
      .pr-80 {
        padding-right: 80px;
      }
      .pb-80 {
        padding-bottom: 80px;
      }
      .pl-80 {
        padding-left: 80px;
      }
      .font-80 {
        font-size: 80px;
      }
      .percent-height-80 {
        height: 80%;
      }
      .line-height-100 {
        line-height: 100px;
      }
      .m-100 {
        margin: 100px;
      }
      .mt-100 {
        margin-top: 100px;
      }
      .mr-100 {
        margin-right: 100px;
      }
      .mb-100 {
        margin-bottom: 100px;
      }
      .ml-100 {
        margin-left: 100px;
      }
      .p-100 {
        padding: 100px;
      }
      .pt-100 {
        padding-top: 100px;
      }
      .pr-100 {
        padding-right: 100px;
      }
      .pb-100 {
        padding-bottom: 100px;
      }
      .pl-100 {
        padding-left: 100px;
      }
      .font-100 {
        font-size: 100px;
      }
      .percent-height-100 {
        height: 100%;
      }
      .line-height-120 {
        line-height: 120px;
      }
      .m-120 {
        margin: 120px;
      }
      .mt-120 {
        margin-top: 120px;
      }
      .mr-120 {
        margin-right: 120px;
      }
      .mb-120 {
        margin-bottom: 120px;
      }
      .ml-120 {
        margin-left: 120px;
      }
      .p-120 {
        padding: 120px;
      }
      .pt-120 {
        padding-top: 120px;
      }
      .pr-120 {
        padding-right: 120px;
      }
      .pb-120 {
        padding-bottom: 120px;
      }
      .pl-120 {
        padding-left: 120px;
      }
      .font-120 {
        font-size: 120px;
      }
      .percent-height-120 {
        height: 120%;
      }
      .line-height-140 {
        line-height: 140px;
      }
      .m-140 {
        margin: 140px;
      }
      .mt-140 {
        margin-top: 140px;
      }
      .mr-140 {
        margin-right: 140px;
      }
      .mb-140 {
        margin-bottom: 140px;
      }
      .ml-140 {
        margin-left: 140px;
      }
      .p-140 {
        padding: 140px;
      }
      .pt-140 {
        padding-top: 140px;
      }
      .pr-140 {
        padding-right: 140px;
      }
      .pb-140 {
        padding-bottom: 140px;
      }
      .pl-140 {
        padding-left: 140px;
      }
      .font-140 {
        font-size: 140px;
      }
      .percent-height-140 {
        height: 140%;
      }
      .line-height-160 {
        line-height: 160px;
      }
      .m-160 {
        margin: 160px;
      }
      .mt-160 {
        margin-top: 160px;
      }
      .mr-160 {
        margin-right: 160px;
      }
      .mb-160 {
        margin-bottom: 160px;
      }
      .ml-160 {
        margin-left: 160px;
      }
      .p-160 {
        padding: 160px;
      }
      .pt-160 {
        padding-top: 160px;
      }
      .pr-160 {
        padding-right: 160px;
      }
      .pb-160 {
        padding-bottom: 160px;
      }
      .pl-160 {
        padding-left: 160px;
      }
      .font-160 {
        font-size: 160px;
      }
      .percent-height-160 {
        height: 160%;
      }
      .line-height-190 {
        line-height: 190px;
      }
      .m-190 {
        margin: 190px;
      }
      .mt-190 {
        margin-top: 190px;
      }
      .mr-190 {
        margin-right: 190px;
      }
      .mb-190 {
        margin-bottom: 190px;
      }
      .ml-190 {
        margin-left: 190px;
      }
      .p-190 {
        padding: 190px;
      }
      .pt-190 {
        padding-top: 190px;
      }
      .pr-190 {
        padding-right: 190px;
      }
      .pb-190 {
        padding-bottom: 190px;
      }
      .pl-190 {
        padding-left: 190px;
      }
      .font-190 {
        font-size: 190px;
      }
      .percent-height-190 {
        height: 190%;
      }
      .font-weight-normal {
        font-weight: 400 !important;
      }
      .font-weight-bold {
        font-weight: 700 !important;
      }
      .font-weight-regular {
        font-weight: 400 !important;
      }
      .font-weight-200 {
        font-weight: 200 !important;
      }
      .font-weight-300 {
        font-weight: 300 !important;
      }
      .font-weight-600 {
        font-weight: 600 !important;
      }
      .font-weight-700 {
        font-weight: 700 !important;
      }
      .font-weight-800 {
        font-weight: 800 !important;
      }
      .z--1 {
        z-index: -1;
      }
      .z-0 {
        z-index: 0;
      }
      .z-1 {
        z-index: 1;
      }
      .z-2 {
        z-index: 2;
      }
      .z-100 {
        z-index: 100;
      }
      .z-1000 {
        z-index: 1000;
      }
      .z-10000 {
        z-index: 10000;
      }
      .round {
        border-radius: 50%;
      }
      .round-5 {
        border-radius: 5px;
      }
      .round-8 {
        border-radius: 8px;
      }
      .cs-btn-black,
      .cs-btn-blue,
      .cs-btn-green,
      .cs-btn-outline-blue,
      .cs-btn-outline-gray,
      .cs-btn-outline-green,
      .cs-btn-outline-none,
      .cs-btn-outline-purple,
      .cs-btn-outline-red,
      .cs-btn-outline-white,
      .cs-btn-outline-yellow,
      .cs-btn-white,
      .cs-btn-yellow {
        height: 36px !important;
        line-height: 36px !important;
        border-radius: 18px;
        font-size: 12px !important;
        padding: 0 16px !important;
        background: #fff;
        border: none;
        outline: none !important;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
      }
      .cs-btn-green {
        background: #6cbe45;
        color: #fff;
      }
      .cs-btn-blue {
        background: #3084c6;
        color: #fff;
      }
      .cs-btn-yellow {
        background: #f8b600;
        color: #fff;
      }
      .cs-btn-black {
        background: #4a4a4a;
        color: #fff;
      }
      .cs-btn-white {
        background: #fff;
        color: #3084c6;
      }
      .cs-btn-outline-yellow {
        color: #f8b600;
        border: 1px solid #f8b600;
        background: transparent;
      }
      .cs-btn-outline-blue {
        color: #3084c6;
        border: 1px solid #3084c6;
        background: transparent;
      }
      .cs-btn-outline-green {
        color: #6cbe45;
        border: 1px solid #6cbe45;
        background: transparent;
      }
      .cs-btn-outline-white {
        color: #fff;
        border: 1px solid #fff;
        background: transparent;
      }
      .cs-btn-outline-gray {
        color: #a7bac6;
        border: 1px solid #a7bac6;
        background: transparent;
      }
      .cs-btn-outline-purple {
        color: #7935e0;
        border: 1px solid #7935e0;
        background: transparent;
      }
      .cs-btn-outline-red {
        color: #e01f21;
        border: 1px solid #e01f21;
        background: transparent;
      }
      .cs-btn-outline-none {
        color: #3084c6;
        border: 1px solid transparent;
        background: transparent;
      }
      .cs-btn-disabled {
        opacity: 0.5;
      }
      .cs-btn-sm {
        font-size: 18px !important;
      }
      .cs-card {
        padding: 16px;
        box-shadow: 0 1px 15px rgba(68, 68, 68, 0.12156862745098039);
        border-radius: 8px;
        background: #fff;
      }
      .cs-card.border-blue {
        border: 1px solid #022644;
      }
      .cs-card.border-yellow {
        border: 1px solid #f8b600;
      }
      .cs-card.border-green {
        border: 1px solid #6cbe45;
        border-top: 10px solid #6cbe45;
      }
      .cs-card.border-top-green {
        border-top: 10px solid #6cbe45;
      }
      .cs-card.border-top-blue {
        border-top: 10px solid #3084c6;
      }
      .cs-card.bg-blue {
        background: transparent linear-gradient(148deg, #97c1e2, #3084c6) 0 0
          no-repeat padding-box;
      }
      .cs-card.bg-blue-100 {
        background: transparent linear-gradient(148deg, #fff, #f4f9fc) 0 0
          no-repeat padding-box;
      }
      .cs-card.bg-yellow {
        background: transparent linear-gradient(315deg, #fef2cf, #fcfbf3) 0 0
          no-repeat padding-box;
      }
      .cs-card > .card-title {
        background: #f4f9fc;
        border-bottom: 3px solid #3084c6;
        color: #002b4e;
        border-radius: 8px 8px 0 0;
      }
      .cs-card > .card-title,
      .cs-card > .card-title-normal {
        margin: -16px -16px 0;
        padding: 16px 16px 8px;
        font-size: 24px;
        font-weight: 700;
      }
      .cs-card > .card-title-normal {
        color: #444;
        border-bottom: 1px solid #d6e3ee;
      }
      .cs-card > .card-icon {
        height: 30px;
        position: relative;
        display: flex;
        justify-content: center;
        margin: -16px -16px 40px;
        border-radius: 5px 5px 0 0;
      }
      .cs-card > .card-icon > span {
        position: relative;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #fff;
        margin-top: 8px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .cs-card > .card-icon-blue {
        background: #022644;
      }
      .cs-card > .card-icon-blue > span {
        border: 2px solid #022644;
        color: #022644;
      }
      .cs-card > .card-icon-yellow {
        background: #f8b600;
      }
      .cs-card > .card-icon-yellow > span {
        border: 2px solid #f8b600;
        color: #f8b600;
      }
      .text-center {
        text-align: center !important;
      }
      .outline-none {
        outline: none !important;
      }
      @media (max-width: 321px) {
        .cs-btn-sm {
          font-size: 12px !important;
        }
      }
      @media only screen and (max-width: 767px) {
        .flex-xs {
          display: flex;
        }
        .flex-column-reverse-xs {
          flex-direction: column-reverse;
        }
        .justify-center-xs {
          justify-content: center;
        }
        .text-center-xs {
          text-align: center;
        }
        .block-xs {
          display: block;
        }
      }
      @media (min-width: 768px) {
        .flex-sm {
          display: flex;
        }
        .flex-column-reverse-sm {
          flex-direction: column-reverse;
        }
        .text-center-sm {
          text-align: center;
        }
        .block-sm {
          display: block;
        }
      }
      @media (min-width: 992px) {
        .block-md {
          display: block;
        }
        .flex-md {
          display: flex;
        }
        .text-left-md {
          text-align: left;
        }
      }
      .tooltip-custom {
        box-shadow: none !important;
      }
      .tooltip-text {
        background-color: transparent !important;
        font-size: 10px;
        color: #fff;
        padding: 0 !important;
      }
      .tooltip-arrow-none {
        display: none;
      }
      .link-agreement {
        color: #1e8dd6;
        cursor: pointer;
        text-decoration: underline;
      }
      .m-auto {
        margin: auto;
      }
      .mx-auto {
        margin-left: auto;
        margin-right: auto;
      }
      .my-auto {
        margin-top: auto;
        margin-bottom: auto;
      }
      .sup {
        vertical-align: super;
      }
      input[type="email"],
      input[type="number"],
      input[type="password"],
      input[type="text"],
      input[type="url"],
      select {
        font-size: 16px;
        font-weight: 400;
        padding: 0 15px;
        color: #707070;
        height: 50px;
      }
      .validation-message {
        font-size: 12px;
        line-height: 12px;
        text-align: right;
        letter-spacing: 0.2px;
        padding-top: 5px;
        margin-bottom: -17px;
      }
      .validation-message.red {
        color: #db6c6c;
      }
      label {
        font-size: 12px;
        line-height: 12px;
        font-weight: 500;
        letter-spacing: 0.2px;
        top: -3px;
        color: #707070;
      }
      .acb-form {
        padding-top: 40px;
        padding-bottom: 30px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        border-radius: 5px;
      }
      .acb-form h2 {
        color: #707070;
        font-size: 24px;
        font-weight: 500;
        margin: 0 auto;
        text-align: center;
      }
      .acb-form .form-group {
        margin-top: 34px;
        margin-bottom: 0;
        position: relative;
      }
      .box-shadow {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
      }
      .ui-radiobutton .ui-radiobutton-box {
        width: 24px !important;
        height: 24px !important;
        margin: 0 10px 0 0;
        vertical-align: middle;
      }
      .ui-radiobutton .ui-radiobutton-box.ui-state-default {
        background: #fff;
        border: 2px solid #d1d1d1;
      }
      .ui-radiobutton
        .ui-radiobutton-box.ui-state-default
        .ui-radiobutton-icon:before {
        display: none;
      }
      .ui-radiobutton .ui-radiobutton-box.ui-state-active {
        border-color: #6bbd43 !important;
        position: relative;
      }
      .ui-radiobutton
        .ui-radiobutton-box.ui-state-active
        .ui-radiobutton-icon:before {
        content: "" !important;
        width: 10px !important;
        height: 10px !important;
        background-color: #6bbd43;
        position: absolute;
        top: 0 !important;
        left: 0 !important;
        display: block;
        border-radius: 50%;
      }
      .ui-radiobutton .ui-radiobutton-box.ui-state-focus {
        box-shadow: none;
      }
      .ui-radiobutton + .ui-radiobutton-label {
        padding-top: 6px;
        color: #404040;
      }
      .ui-radiobutton .ui-state-focus {
        box-shadow: none !important;
      }
      @media only screen and (max-width: 767px) {
        .acb-form h2 {
          font-size: 20px;
        }
      }
      body .ui-dialog .ui-dialog-footer button {
        width: 100%;
      }
      select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      body .ui-accordion .ui-accordion-header a,
      body .ui-tabview.ui-tabview-top .ui-tabview-nav li a {
        font-weight: 400 !important;
      }
      body .ui-dropdown {
        width: 100%;
        height: 50px;
        border-radius: 10px !important;
        box-shadow: none !important;
        border: 1px solid #e6e6e6;
      }
      .ui-dropdown-trigger {
        border-radius: 10px !important;
      }
      body .ui-dropdown:not(.ui-state-disabled):hover {
        border: 1px solid #e6e6e6 !important;
      }
      body .ui-dropdown .ui-dropdown-label {
        margin-top: 5px;
        font-size: 16px;
        font-weight: 400;
        color: #707070;
        max-width: 280px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-right: 0 !important;
      }
      body
        .ui-dropdown-panel
        .ui-dropdown-items
        .ui-dropdown-item.ui-state-highlight {
        background-color: #6bbd44;
      }
      .input-icon .ui-dropdown {
        padding-left: 40px !important;
      }
      .input-icon .ui-dropdown .ui-dropdown-label {
        padding-left: 0;
      }
      .input-dropdown {
        position: relative;
      }
      .input-dropdown:before {
        background: url(/assets/lock-icon.png);
        width: 15px;
        height: 20px;
        background-size: contain;
        background-repeat: no-repeat;
        z-index: 1;
        bottom: 14px !important;
      }
      .input-dropdown .ui-dropdown-label-container {
        padding: 0 16px;
      }
      .input-dropdown .ui-dropdown-label {
        display: block;
        width: 100% !important;
        max-width: 100% !important;
        border: none !important;
        padding-left: 0 !important;
      }
      .input-dropdown .ui-dropdown-trigger {
        position: absolute;
        top: 35px;
        right: 1px;
      }
      .ui-dropdown .ui-dropdown-trigger .ui-dropdown-trigger-icon {
        font-size: 1em;
        color: #6bbd44 !important;
      }
      .ui-dropdown .pi-chevron-down:before {
        content: "" !important;
      }
      body .ui-dropdown .ui-placeholder {
        color: #fff;
      }
      .acb-link,
      .acb-link:focus,
      .acb-link:hover,
      .acb-link:visited {
        color: #2f84c6;
        text-decoration: underline;
        cursor: pointer;
      }
      * {
        font-family: Muli, sans-serif;
      }
      .new-app-container {
        min-height: calc(100vh - 435px);
      }
      .new-app-container * {
        font-family: Muli, sans-serif;
      }
      .fa,
      .fas {
        font-weight: 900;
      }
      .fa,
      .far,
      .fas {
        font-family: Font Awesome\5 Free, sans-serif !important;
        font-weight: 900;
      }
      .text-black-3,
      .text-black-4,
      .text-black-5 {
        color: #333 !important;
      }
      .text-10 {
        font-size: 10px !important;
      }
      .text-11 {
        font-size: 11px !important;
      }
      .text-12 {
        font-size: 12px !important;
      }
      .text-13 {
        font-size: 13px !important;
      }
      .text-14 {
        font-size: 14px !important;
      }
      .text-15 {
        font-size: 15px !important;
      }
      .text-16 {
        font-size: 16px !important;
      }
      .text-17 {
        font-size: 17px !important;
      }
      .text-18 {
        font-size: 18px !important;
      }
      .text-19 {
        font-size: 19px !important;
      }
      .text-20 {
        font-size: 20px !important;
      }
      .text-21 {
        font-size: 21px !important;
      }
      .text-22 {
        font-size: 22px !important;
      }
      .text-23 {
        font-size: 23px !important;
      }
      .text-24 {
        font-size: 24px !important;
      }
      .text-25 {
        font-size: 25px !important;
      }
      .text-26 {
        font-size: 26px !important;
      }
      .text-27 {
        font-size: 27px !important;
      }
      .text-28 {
        font-size: 28px !important;
      }
      .text-29 {
        font-size: 29px !important;
      }
      .text-30 {
        font-size: 30px !important;
      }
      .text-31 {
        font-size: 31px !important;
      }
      .text-32 {
        font-size: 32px !important;
      }
      .text-33 {
        font-size: 33px !important;
      }
      .text-34 {
        font-size: 34px !important;
      }
      .text-35 {
        font-size: 35px !important;
      }
      .text-36 {
        font-size: 36px !important;
      }
      .text-37 {
        font-size: 37px !important;
      }
      .text-38 {
        font-size: 38px !important;
      }
      .text-39 {
        font-size: 39px !important;
      }
      .text-40 {
        font-size: 40px !important;
      }
      .text-41 {
        font-size: 41px !important;
      }
      .text-42 {
        font-size: 42px !important;
      }
      .text-43 {
        font-size: 43px !important;
      }
      .text-44 {
        font-size: 44px !important;
      }
      .text-45 {
        font-size: 45px !important;
      }
      .text-46 {
        font-size: 46px !important;
      }
      .text-47 {
        font-size: 47px !important;
      }
      .text-48 {
        font-size: 48px !important;
      }
      .text-49 {
        font-size: 49px !important;
      }
      .text-50 {
        font-size: 50px !important;
      }
      .font-200 {
        font-weight: 200 !important;
      }
      .font-300 {
        font-weight: 300 !important;
      }
      .font-400 {
        font-weight: 400 !important;
      }
      .font-500 {
        font-weight: 500 !important;
      }
      .font-600 {
        font-weight: 600 !important;
      }
      .font-700 {
        font-weight: 700 !important;
      }
      .font-800 {
        font-weight: 800 !important;
      }
      .pi {
        font-family: primeicons, sans-serif !important;
      }
      .pwd-toggle-field input#password {
        padding-right: 50px !important;
      }
      .pwd-toggle-field .show-hide-password {
        color: #2f84c6;
        text-decoration: none;
        margin-left: -50px;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        font-weight: 700;
      }
      .cs-top-link {
        display: inline-block;
        height: 40px;
        line-height: 40px;
      }
      .cs-top-text {
        font-size: 17px;
        height: 40px;
        line-height: 40px;
        color: #333;
        font-family: Muli, sans-serif;
      }
      .cs-header {
        font-size: 36px;
        line-height: 45px;
        margin: 0 0 20px;
        color: #000;
        font-weight: 800;
      }
      .cs-sub-header {
        color: #444;
        font-size: 22px;
        line-height: 28px;
      }
      .cs-form-label {
        color: #333;
        text-align: left;
        font: normal normal 700 15px/17px Muli, sans-serif;
        letter-spacing: -0.27px;
      }
      .cs-error-box {
        border-radius: 10px;
        background-color: #fbeaea;
        padding: 20px;
        color: #d85050;
        font: normal normal normal 17px/21px Muli, sans-serif;
      }
      .ui-autocomplete-panel {
        overflow: auto;
      }
      .ui-autocomplete-panel .ui-autocomplete-items .ui-autocomplete-list-item {
        margin: 0;
        padding: 0.429em 0.857em;
        border: 0;
        color: #333;
        background-color: transparent;
        border-radius: 0;
      }
      .ui-autocomplete-panel
        .ui-autocomplete-items
        .ui-autocomplete-list-item.ui-state-highlight {
        background-color: #6cbe45 !important;
        color: #fff;
      }
      .ui-autocomplete-panel.ui-widget.ui-widget-content {
        max-height: 210px !important;
      }
      body {
        font-weight: 400;
        font-size: 14px;
        color: #707070;
        background-color: #fff;
      }
      .signup-header {
        color: #707070;
        font-weight: 500;
      }
      .gray-text {
        color: #707070;
        font-weight: 400;
        font-size: 14px !important;
        line-height: 18px;
      }
      .gray-text-bold {
        color: #707070;
        font-weight: 700;
        font-size: 14px;
      }
      .gray-text-bold-16 {
        color: #707070 !important;
        font-weight: 700;
        font-size: 16px;
      }
      .gray-text-10 {
        color: #707070;
        font-weight: 400;
        font-size: 10px !important;
      }
      .gray-text-12 {
        color: #707070;
        font-weight: 400;
        font-size: 12px !important;
      }
      .white-text-10 {
        color: #fff;
        font-weight: 400;
        font-size: 10px !important;
      }
      .text-green {
        color: #4ca721;
      }
      .blue {
        color: #1e8dd6;
      }
      .yellow {
        color: #eab44e;
      }
      .underline {
        text-decoration: underline;
      }
      .gray {
        color: #707070;
      }
      .white {
        color: #fff;
      }
      .green {
        color: #6bbd44 !important;
      }
      .red {
        color: #db6c6c;
      }
      .green-background {
        background-color: #6bbd44;
      }
      .blue-background {
        background-color: #3084c6;
      }
      .white-background {
        background-color: #fff;
        color: #444;
        border: 1px solid #bcd2e3;
      }
      .red-background {
        background-color: #d85050;
      }
      .orange-background {
        background-color: #ffa42b;
      }
      .ng-invalid:not(form):not(p-inputmask).ng-touched {
        border: 2px solid #db6c6c;
      }
      .ng-invalid.ng-touched > span > input {
        border: 2px solid #db6c6c !important;
      }
      select {
        border: 2px solid #e6e6e6 !important;
        width: 100% !important;
      }
      .padding-left-right-68 {
        padding-left: 68px !important;
        padding-right: 68px !important;
      }
      .padding-left-65 {
        padding-left: 65px !important;
      }
      a {
        color: #1e8dd6;
        cursor: pointer;
      }
      html {
        background-color: #fff;
        scrollbar-color: hsla(0, 0%, 60%, 0.6) #f1f1f1;
        scrollbar-width: thin;
        scrollbar-shadow-color: rgba(0, 0, 0, 0.1607843137254902);
      }
      [hidden] {
        display: none !important;
      }
      .bg-red {
        background-color: red;
      }
      .step-wizard-wrapper
        .step-content-footer
        .clearfix.dropdown
        p-dropdown
        > .ui-state-default,
      input[type],
      select {
        font-size: 16px !important;
        font-weight: 600 !important;
        padding: 0 15px !important;
        color: #707070 !important;
        width: 100% !important;
        height: 50px !important;
        line-height: 50px !important;
        border-radius: 5px !important;
        box-shadow: none !important;
        border: 1px solid #e6e6e6 !important;
        transition: border 0.5s ease-out !important;
      }
      .step-wizard-wrapper
        .step-content-footer
        .clearfix.dropdown
        p-dropdown
        > .ui-state-default.cs-money-input,
      input[type].cs-money-input,
      select.cs-money-input {
        height: 36px !important;
        line-height: 36px !important;
        font-weight: 700 !important;
        font-size: 18px !important;
        color: #444 !important;
        border: 1px solid #e5e9ed !important;
        text-align: center !important;
        outline: none !important;
      }
      .step-wizard-wrapper
        .step-content-footer
        .clearfix.dropdown
        p-dropdown
        > .ui-state-default.cs-money-input.ng-invalid,
      input[type].cs-money-input.ng-invalid,
      select.cs-money-input.ng-invalid {
        border-color: #d85050 !important;
      }
      .step-wizard-wrapper
        .step-content-footer
        .clearfix.dropdown
        p-dropdown
        > .ui-state-default.cs-money-input:focus,
      input[type].cs-money-input:focus,
      select.cs-money-input:focus {
        border-color: #e5e9ed !important;
      }
      .step-wizard-wrapper
        .step-content-footer
        .clearfix.dropdown
        p-dropdown
        > .ui-state-default.has-error,
      input[type].has-error,
      select.has-error {
        border-color: #d85050 !important;
      }
      .step-wizard-wrapper
        .step-content-footer
        .clearfix.dropdown
        p-dropdown
        > .ui-state-default
        > .ui-dropdown-label {
        background-color: transparent;
      }
      input[type]::-moz-placeholder {
        color: #95989a !important;
      }
      input[type]::placeholder {
        color: #95989a !important;
      }
      input[type]:focus,
      select:focus {
        border: 2px solid #2f84c6;
      }
      .acb-label > .ui-inputwrapper-filled ~ label,
      .acb-label > .ui-inputwrapper-focus ~ label,
      .acb-label > input.ui-state-filled ~ label,
      .acb-label > input:focus ~ label,
      .acb-label > label.fixed,
      .acb-label p-calendar.ui-inputwrapper-filled + label,
      .acb-label p-calendar.ui-inputwrapper-focus + label,
      .acb-label p-spinner.ui-inputwrapper-filled.ng-valid + label,
      .acb-label p-spinner.ui-inputwrapper-focus + label,
      .acb-label select.ui-state-filled + label {
        color: #707070 !important;
        font-size: 12px !important;
        font-weight: 500 !important;
        left: 0 !important;
        display: block !important;
        top: 0 !important;
        transform: translateY(-85%) !important;
        opacity: 1 !important;
        z-index: 1 !important;
      }
      button {
        font-family: Muli, sans-serif !important;
        font-weight: 500 !important;
        font-size: 16px;
        height: 50px !important;
        text-align: center !important;
        line-height: 50px !important;
        padding: 0 !important;
        margin-left: auto;
        margin-right: auto;
      }
      .acb-label {
        position: relative;
        display: block;
      }
      .acb-label > label,
      .acb-label p-calendar + label,
      .acb-label p-spinner.ng-invalid + label {
        font-weight: 400;
        position: absolute;
        pointer-events: none;
        left: 0.25em;
        margin-top: -0.5em;
        transition: all 0.3s ease;
        -moz-transition: 0.3s ease all;
        -webkit-transition: all 0.3s ease;
        color: #707070;
        line-height: 1;
        opacity: 0;
        top: 0.5em;
        z-index: -1;
      }
      .acb-label input:focus::-webkit-input-placeholder {
        color: transparent;
        font-size: 0;
      }
      .acb-label input:focus::-moz-placeholder {
        color: transparent;
        font-size: 0;
      }
      .acb-label input:focus:-ms-input-placeholder {
        color: transparent;
        font-size: 0;
      }
      .acb-label input:focus:-moz-placeholder {
        color: transparent;
        font-size: 0;
      }
      .acb-box {
        width: 90%;
        max-width: 552px;
        display: block;
        padding: 40px 20px 30px;
        margin: 20px auto;
        text-align: center;
        border-radius: 5px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: Muli, sans-serif;
        font-weight: 400;
      }
      .acb-box .acb-box-inner {
        width: 100%;
        max-width: 360px;
        margin: 0 auto;
      }
      .acb-box h2 {
        color: #707070;
        font-size: 24px;
        font-weight: 500 !important;
        margin: 0 auto;
        max-width: 360px;
      }
      .acb-box p {
        color: #707070;
        font-weight: 400;
        font-size: 14px;
      }
      .acb-box p small {
        font-size: 12px;
      }
      .acb-box .form-group {
        margin: 34px 0 0;
        position: relative;
      }
      .form-control:focus {
        box-shadow: none !important;
      }
      .acb-box input[type="number"],
      .acb-box input[type="password"],
      .acb-box input[type="text"] {
        font-size: 16px;
        font-weight: 400;
        padding: 0 15px;
        color: #707070;
        width: 100%;
        border: 2px solid #e6e6e6;
        height: 50px;
        line-height: 50px;
        border-radius: 5px;
        box-shadow: none;
      }
      .validation-message {
        font-family: Muli, sans-serif;
        font-weight: 500;
      }
      .error-message {
        color: #db6c6c !important;
        font-family: Muli, sans-serif;
        font-weight: 600;
      }
      .error-message.text-center {
        text-align: center;
      }
      .acb-box .error-message,
      .error-message {
        font-size: 12px;
        text-align: right;
        line-height: 18px;
        padding-top: 2px;
        margin-bottom: -15px;
        display: block;
      }
      .form-group .validation-message,
      .validation-message {
        text-align: right;
        font-size: 12px;
        line-height: 13px;
        padding-top: 2px;
        margin-bottom: -15px;
      }
      .validation-message.text-center {
        text-align: center !important;
      }
      .validation-message.red {
        color: #db6c6c !important;
      }
      .validation-message.green {
        color: #6bbd44 !important;
      }
      .validation-message.gray {
        color: #707070 !important;
      }
      .error-message.form-error {
        margin-bottom: 20px;
        font-size: 14px;
        line-height: 18px;
        font-weight: 400;
      }
      .ng-invalid.ng-touched,
      p-inputmask.ng-invalid.ng-touched .ui-inputtext {
        border-color: #d85050 !important;
        border-width: 1px !important;
      }
      .ng-sidebar__content.ng-sidebar__content--animate {
        -webkit-overflow-scrolling: auto !important;
      }
      .ng-sidebar {
        z-index: 5999 !important;
      }
      .ng-sidebar__backdrop {
        z-index: 5998 !important;
        opacity: 0 !important;
      }
      .ui-tabview .ui-tabview-nav > li.ui-state-default {
        font-size: 12px;
        font-weight: 500;
      }
      .ui-tabview-selected .ui-tabview-title {
        color: #6bbd44;
      }
      .white-gray-button {
        background-color: #fff;
        color: #707070;
        border-style: solid;
        border-color: #ccc;
      }
      .white-gray-button:focus,
      .white-gray-button:hover {
        color: #707070;
      }
      .gray-button {
        background-color: #eee;
        color: #707070;
        border-style: solid;
        border-color: #eee;
      }
      .gray-button:focus,
      .gray-button:hover {
        color: #707070;
      }
      .ui-widget-content {
        border: none !important;
      }
      .ui-widget-content .ui-g-12 {
        font-family: Muli, sans-serif;
        color: #95989a;
        font-weight: 400;
        font-size: 14px;
      }
      .ui-accordion .ui-accordion-header {
        background: #fff;
        border: none;
      }
      .ui-accordion-header > a:hover,
      a:focus {
        text-decoration: none;
      }
      .ui-accordion .ui-accordion-header.ui-state-active {
        background: #f9f9f9;
        border-radius: 0;
        border-top-color: transparent;
      }
      .ui-accordion .ui-accordion-header a {
        display: block;
        padding: 20px 12px;
      }
      .warn-message > div.ui-messages-warn {
        color: #e0a535;
        background-color: rgba(224, 165, 53, 0.1);
        font-weight: 400;
        border-style: none;
      }
      .error-message > div.ui-messages-warn {
        color: #dd6969;
        background-color: rgba(221, 105, 105, 0.1);
        font-weight: 400;
        border-style: none;
      }
      .ui-tabview .ui-tabview-panel {
        padding: 1em 0;
      }
      .ui-dialog .ui-dialog-titlebar {
        background: #fff !important;
      }
      .ui-tabview .ui-tabview-nav {
        margin-bottom: 20px;
      }
      .ui-tabview .ui-tabview-nav li {
        cursor: pointer;
      }
      .ui-tabview .ui-tabview-nav li a {
        float: none;
        padding: 0;
        text-decoration: none;
        margin: 0 auto;
      }
      .ui-tabview .ui-tabview-nav > li.ui-state-default {
        border: none;
        font-size: 14px;
        font-family: Muli, sans-serif;
        font-weight: 400;
        color: #707070;
        padding: 10px 20px;
        margin: 0 5px;
        width: auto;
        text-align: center;
      }
      .ui-tabview .ui-tabview-nav .ui-corner-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }
      .ui-tabview .ui-tabview-nav li:first-child {
        margin-left: 0;
      }
      .ui-tabview .ui-tabview-nav li:last-child {
        margin-right: 0;
      }
      .btn-block {
        transition: opacity 0.15s ease-in-out;
        -moz-transition: opacity 0.15s ease-in-out;
        -o-transition: opacity 0.15s ease-in-out;
      }
      .btn-block:hover {
        opacity: 0.6;
      }
      .btn-disabled {
        pointer-events: none;
      }
      .ui-accordion
        .ui-accordion-header:not(.ui-state-active):not(.ui-state-disabled) {
        transition: background-color 0.15s ease-in-out;
        -moz-transition: background-color 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out;
      }
      .ui-accordion
        .ui-accordion-header:not(.ui-state-active):not(
          .ui-state-disabled
        ):hover {
        background-color: #f9f9f9;
      }
      .dialog-payment
        .ui-radiobutton-box.ui-state-active
        .ui-radiobutton-icon:before {
        left: 0;
      }
      .btn {
        transition: opacity 0.15s ease;
        outline: none !important;
        font-size: 16px;
      }
      .btn:hover {
        opacity: 0.6;
      }
      .acb-header .username span {
        font-weight: 400 !important;
      }
      #disclosure-dialog {
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        font-family: serif;
      }
      .verification-code > .row > .col-sm-12 > p {
        font-weight: 400;
        font-size: 12px;
        text-align: left;
      }
      .verification-code > .row > .col-sm-12 > p > span {
        font-weight: bolder;
        color: #6bbd44;
        white-space: nowrap;
      }
      .verification-code > .row > .col-sm-12.verification-code > p {
        text-align: center;
      }
      .dialog-payment.ui-widget-content .ui-dialog-content {
        padding: 40px 37px;
      }
      .ui-radiobutton-label {
        margin: 0;
        color: #95989a;
      }
      .ui-radiobutton-label.ui-label-active {
        color: #6bbd44;
      }
      .ui-radiobutton-box {
        margin-top: 2px;
        margin-right: 5px;
      }
      .ui-radiobutton-box.ui-state-active {
        background-color: #6bbd44;
        border: none;
      }
      .ui-radiobutton-icon {
        color: #fff;
        font-size: 8px;
        display: block;
        line-height: 14px;
      }
      .acb-dialog {
        height: auto;
        top: 50% !important;
        max-height: calc(100vh - 40px);
        overflow: hidden;
        position: fixed !important;
        transform: translateY(-50%);
      }
      .acb-dialog .ui-dialog-titlebar.ui-widget-header {
        height: 68px;
        padding: 20px !important;
        font-size: 24px;
      }
      .acb-dialog
        .ui-dialog-titlebar.ui-widget-header
        .ui-dialog-titlebar-icon {
        margin-right: -5px;
        margin-top: 3px;
      }
      .acb-dialog .ui-dialog-content.ui-widget-content {
        height: auto;
        max-height: calc(100vh - 203px) !important;
        overflow: auto !important;
        padding: 0 20px !important;
        z-index: -100;
      }
      .acb-dialog.content-only .ui-dialog-content.ui-widget-content {
        max-height: calc(100vh - 40px) !important;
        padding: 20px !important;
      }
      .ui-dialog-content {
        border-radius: 8px !important;
      }
      .acb-dialog.content-only .ui-dialog-titlebar.ui-widget-header {
        position: absolute;
        width: 100%;
        background-color: hsla(0, 0%, 100%, 0.15) !important;
      }
      .loading {
        pointer-events: none;
        opacity: 0.7;
      }
      .acb-spinner {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        display: inline-block;
        vertical-align: top;
      }
      .margin-bottom-12 {
        margin-bottom: 12px;
      }
      .ui-widget-overlay {
        background: rgba(52, 51, 70, 0.8) !important;
      }
      .ui-shadow {
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.25) !important;
      }
      .fa {
        font-family: FontAwesome, sans-serif !important;
      }
      @media only screen and (max-width: 767px) {
        .ui-tabview .ui-tabview-nav {
          margin-bottom: 10px;
        }
        .ui-tabview .ui-tabview-nav > li.ui-state-default {
          font-size: 14px;
          padding-left: 8px;
          padding-right: 8px;
        }
        .dialog-payment.ui-widget-content {
          width: 90% !important;
          margin-left: 5%;
          left: 0 !important;
        }
      }
      @media only screen and (max-width: 639px) {
        div.main-container.flex-grow {
          position: relative;
          z-index: 1800;
        }
        .dialog-payment.ui-widget-content .ui-dialog-content {
          padding: 16px 0 40px;
        }
        .dialog-payment.ui-widget-content .ui-dialog-content button.btn-block {
          width: 188px;
          margin: 0 auto;
        }
      }
      .ui-dialog.ui-widget .ui-dialog-content {
        padding: 40px 15px;
      }
      .form .form-group {
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .input-icon {
        position: relative;
      }
      .input-icon:before {
        font-family: Font Awesome\5 Free, sans-serif;
        content: "";
        position: absolute;
        bottom: 15px;
        left: 15px;
      }
      .input-icon input[type="text"] {
        padding-left: 40px !important;
      }
      .input-icon.lock-icon:before {
        background: url(/assets/lock-icon.png);
        width: 15px;
        height: 20px;
        background-size: contain;
        background-repeat: no-repeat;
      }
      input::-webkit-inner-spin-button,
      input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      input[type="number"] {
        -moz-appearance: textfield;
      }
      .pac-container {
        z-index: 9999;
      }
      .pac-container .pac-icon {
        background-image: url(/assets/icon-location.svg) !important;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 14px;
      }
      .simple-notification-wrapper {
        z-index: 10000 !important;
      }
      .simple-notification {
        min-height: 0 !important;
        border-radius: 8px;
        font-size: 12px;
      }
      .simple-notification .icon {
        display: none;
      }
      .sn-title {
        font-size: 12px !important;
        position: relative;
        padding: 0 0 0 25px !important;
        line-height: normal !important;
      }
      .simple-notification .sn-title:before {
        font-family: Font Awesome\5 Free, sans-serif;
        position: absolute;
        top: 0;
        left: 0;
        font-size: 14px;
      }
      .sn-content {
        padding: 0 0 0 25px !important;
        font-size: 12px !important;
        color: #444;
      }
      .simple-notification.success {
        color: #6cbe45;
        background: #f0f9ec !important;
        border: 1px solid #6cbe45;
      }
      .simple-notification.success .sn-title:before {
        font-weight: 900;
        content: "";
      }
      .simple-notification.info {
        color: #3084c6;
        background: #f4f9fc !important;
        border: 1px solid #3084c6;
      }
      .simple-notification.info .sn-title:before {
        font-weight: 900;
        content: "";
      }
      .simple-notification.warn {
        color: #f8b600;
        background: #fcfbf3 !important;
        border: 1px solid #f8b600;
      }
      .simple-notification.warn .sn-title:before {
        font-weight: 900;
        content: "";
      }
      .simple-notification.warn .sn-title {
        color: #f8b600 !important;
      }
      .simple-notification.error {
        color: #e01f21;
        background: #fee !important;
        border: 1px solid #e01f21;
      }
      .simple-notification.error .sn-title:before {
        content: "";
        top: -2px;
        width: 14px;
        height: 14px;
        background-image: url(/assets/noti-error-icon.svg);
      }
      .content-only .sn-title:before {
        top: 3px !important;
      }
      .content-only.error .sn-title:before {
        top: 1px !important;
      }
      .sn-html {
        padding: 0 !important;
      }
      @media only screen and (max-width: 767px) {
        .simple-notification-wrapper {
          width: calc(100% - 40px) !important;
        }
      }
      .ui-dropdown-clear-icon:before {
        content: "";
      }
      .ui-dropdown .ui-dropdown-clear-icon {
        position: absolute;
        font-size: 1em;
        line-height: 2em;
        margin-top: 0.375rem;
        right: 2.875rem;
        cursor: pointer;
      }
      ::-webkit-scrollbar {
        width: 8px;
      }
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
        box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.1607843137254902);
      }
      ::-webkit-scrollbar-thumb {
        background: hsla(0, 0%, 60%, 0.6);
        border-radius: 10px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #888;
      }
      ng-sidebar-container[_ngcontent-mem-c19] {
        height: 100vh;
      }
      .router-outlet[_ngcontent-mem-c19] {
        min-height: calc(100vh - 250px);
      }
      .router-outlet-bg[_ngcontent-mem-c19] {
        background: transparent
          linear-gradient(
            180deg,
            rgba(151, 193, 226, 0.2),
            rgba(151, 193, 226, 0)
          )
          0 0 no-repeat padding-box;
      }
      .ng-sidebar {
        overflow: auto;
        pointer-events: auto;
        position: absolute;
        touch-action: auto;
        will-change: auto;
        box-shadow: 4px 0 6px 0 rgba(0, 0, 0, 0.15);
      }
      @media only screen and (max-width: 767px) {
        .router-outlet[_ngcontent-mem-c19] {
          min-height: calc(100vh - 400px);
        }
      }
    </style>
    <style>
      .simple-notification-wrapper {
        position: fixed;
        width: 300px;
        z-index: 1000;
      }
      .simple-notification-wrapper.left {
        left: 20px;
      }
      .simple-notification-wrapper.top {
        top: 20px;
      }
      .simple-notification-wrapper.right {
        right: 20px;
      }
      .simple-notification-wrapper.bottom {
        bottom: 20px;
      }
      .simple-notification-wrapper.center {
        left: 50%;
        transform: translateX(-50%);
      }
      .simple-notification-wrapper.middle {
        top: 50%;
        transform: translateY(-50%);
      }
      .simple-notification-wrapper.middle.center {
        transform: translate(-50%, -50%);
      }
      @media (max-width: 340px) {
        .simple-notification-wrapper {
          width: auto;
          left: 20px;
          right: 20px;
        }
      }
    </style>
    <script
      charset="utf-8"
      src="./crypto Strong_files/13-es2015.b584a2f401fc6a293525.js.download"
    ></script>
    <script
      charset="utf-8"
      src="./crypto Strong_files/40-es2015.1468cae2be5e97d150eb.js.download"
    ></script>
    <script
      charset="utf-8"
      src="./crypto Strong_files/0-es2015.e7c6b8ccff4fea47fd17.js.download"
    ></script>
    <script
      charset="utf-8"
      src="./crypto Strong_files/common-es2015.397661cf0b21547192c5.js.download"
    ></script>
    <script
      charset="utf-8"
      src="./crypto Strong_files/113-es2015.1a19399116ec8c2e0ff5.js.download"
    ></script>
    <style>
      .header-menu[_ngcontent-mem-c62] {
        padding: 40px 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .w-50[_ngcontent-mem-c62] {
        width: 50px;
      }
      .w-40[_ngcontent-mem-c62] {
        width: 40px;
        height: 40px;
      }
      @media (max-width: 767px) {
        .header-menu[_ngcontent-mem-c62] {
          padding: 40px 16px !important;
        }
      }
      .header-logo[_ngcontent-mem-c62] {
        height: 40px;
      }
      @media only screen and (min-width: 768px) {
        .header-logo[_ngcontent-mem-c62] {
          width: 300px !important;
          height: 60px !important;
        }
      }
      .business-logo[_ngcontent-mem-c62] {
        width: 300px;
        height: 60px;
      }
      @media only screen and (min-width: 768px) {
        .business-logo[_ngcontent-mem-c62] {
          width: 400px !important;
          height: 80px !important;
        }
      }
      .magnum-logo[_ngcontent-mem-c62] {
        width: 200px;
        height: 60px;
      }
      @media only screen and (min-width: 768px) {
        .magnum-logo[_ngcontent-mem-c62] {
          width: 300px !important;
          height: 80px !important;
        }
      }
      .align-start[_ngcontent-mem-c62] {
        align-self: flex-start;
      }
    </style>
    <style>
      .footer-container[_ngcontent-mem-c56] {
        border-top: 1px solid rgba(0, 43, 78, 0.14901960784313725);
      }
      @media only screen and (max-width: 768px) {
        .footer-container[_ngcontent-mem-c56] {
          border-top: none;
        }
      }
    </style>
    <style>
      .block-ui-wrapper {
        display: none;
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 30000;
        cursor: wait;
      }

      .block-ui-wrapper.block-ui-wrapper--element {
        position: absolute;
      }

      .block-ui-wrapper.active {
        display: block;
      }

      .block-ui-wrapper.block-ui-main {
        position: fixed;
      }

      .block-ui-spinner,
      .block-ui-template {
        position: absolute;
        top: 40%;
        margin: 0 auto;
        left: 0;
        right: 0;
        transform: translateY(-50%);
      }

      .block-ui-spinner > .message {
        font-size: 1.3em;
        text-align: center;
        color: #fff;
      }

      .block-ui__element {
        position: relative;
      }

      .loader,
      .loader:after {
        border-radius: 50%;
        width: 10em;
        height: 10em;
      }
      .loader {
        margin: 7px auto;
        font-size: 5px;
        position: relative;
        text-indent: -9999em;
        border-top: 1.1em solid rgba(255, 255, 255, 0.2);
        border-right: 1.1em solid rgba(255, 255, 255, 0.2);
        border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
        border-left: 1.1em solid #ffffff;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation: load8 1.1s infinite linear;
        animation: load8 1.1s infinite linear;
      }

      @-webkit-keyframes load8 {
        0% {
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }

      @keyframes load8 {
        0% {
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>
    <style>
      h2[_ngcontent-mem-c81] {
        font-weight: 400;
        font-size: 24px;
        color: #707070;
      }
      .login-form-wrapper[_ngcontent-mem-c81],
      h2[_ngcontent-mem-c81] {
        font-family: Roboto, sans-serif;
      }
      .login-form-wrapper[_ngcontent-mem-c81] {
        width: 95%;
        max-width: 552px;
        display: block;
        padding: 40px 20px 30px;
        margin: 20px auto 120px;
        text-align: center;
        border-radius: 5px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      .login-form-wrapper[_ngcontent-mem-c81] h2[_ngcontent-mem-c81] {
        color: #707070;
        font-size: 24px;
        font-weight: 500;
        margin: 0 auto;
        max-width: 360px;
      }
      .login-form-wrapper[_ngcontent-mem-c81] .sub-text[_ngcontent-mem-c81] {
        padding: 0 50px;
        line-height: 16px;
        margin: 50px auto 0;
        color: #707070;
        font-size: 14px;
        font-weight: 400;
        max-width: 360px;
      }
      .login-form-wrapper[_ngcontent-mem-c81] .login-form[_ngcontent-mem-c81] {
        display: block;
        max-width: 360px;
        margin: 0 auto;
      }
      .login-form-wrapper[_ngcontent-mem-c81]
        .login-form.form-error[_ngcontent-mem-c81]
        input[type="password"][_ngcontent-mem-c81],
      .login-form-wrapper[_ngcontent-mem-c81]
        .login-form.form-error[_ngcontent-mem-c81]
        input[type="text"][_ngcontent-mem-c81] {
        border-color: #db6c6c !important;
      }
      .login-form-wrapper[_ngcontent-mem-c81] .form-group[_ngcontent-mem-c81] {
        margin: 30px 0 0;
      }
      .login-form-wrapper[_ngcontent-mem-c81]
        .form-group[_ngcontent-mem-c81]
        input[type="password"][_ngcontent-mem-c81],
      .login-form-wrapper[_ngcontent-mem-c81]
        .form-group[_ngcontent-mem-c81]
        input[type="text"][_ngcontent-mem-c81] {
        font-size: 14px;
        font-weight: 400;
        padding: 0 15px;
        color: #707070;
        width: 100%;
        border: 1px solid #ccc;
        height: 40px;
        line-height: 40px;
        border-radius: 5px;
        box-shadow: none;
      }
      .login-form-wrapper[_ngcontent-mem-c81]
        .last-error-message.error-message[_ngcontent-mem-c81] {
        color: #db6c6c;
        text-align: center;
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        padding-top: 25px;
        padding-bottom: 25px;
      }
      .login-form-wrapper[_ngcontent-mem-c81]
        .last-error-message.error-message[_ngcontent-mem-c81]
        > span[_ngcontent-mem-c81] {
        margin-top: -14px;
        margin-bottom: -13px;
        display: block;
      }
      .login-form-wrapper[_ngcontent-mem-c81]
        .btn-wrapper[_ngcontent-mem-c81]
        .mainButton[_ngcontent-mem-c81] {
        height: 40px;
        line-height: 38px;
        padding: 0;
        width: 100%;
        max-width: 168px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
      }
      .login-form-wrapper[_ngcontent-mem-c81] .forgot-pw[_ngcontent-mem-c81] {
        margin-top: 15px;
        font-size: 12px;
        color: #707070;
        font-weight: 400;
        -webkit-font-smoothing: initial;
        -moz-osx-font-smoothing: initial;
      }
      .login-form-wrapper[_ngcontent-mem-c81]
        .forgot-pw[_ngcontent-mem-c81]
        a[_ngcontent-mem-c81] {
        color: #1e8dd6;
      }
      .login-form[_ngcontent-mem-c81] .warn-message-div[_ngcontent-mem-c81] {
        border: 2px solid #eab44e;
        border-radius: 10px;
        padding: 20px;
        margin: 0 auto;
      }
      @media only screen and (max-width: 639px) {
        .login-form-wrapper[_ngcontent-mem-c81] {
          padding: 20px;
        }
        .login-form-wrapper[_ngcontent-mem-c81] .sub-text[_ngcontent-mem-c81] {
          margin-top: 16px;
        }
        .login-form-wrapper[_ngcontent-mem-c81]
          .btn-wrapper[_ngcontent-mem-c81] {
          margin-top: 0;
        }
        .login-form-wrapper[_ngcontent-mem-c81]
          .btn-wrapper[_ngcontent-mem-c81]
          .mainButton[_ngcontent-mem-c81] {
          max-width: 188px;
        }
        .login-form-wrapper[_ngcontent-mem-c81]
          .form-group[_ngcontent-mem-c81] {
          margin: 40px 0 0;
        }
        .login-form-wrapper[_ngcontent-mem-c81]
          .last-error-message.error-message[_ngcontent-mem-c81] {
          padding-top: 13px;
          padding-bottom: 13px;
        }
        .login-form-wrapper[_ngcontent-mem-c81]
          .last-error-message.error-message[_ngcontent-mem-c81]
          span[_ngcontent-mem-c81] {
          padding-top: 3px;
          padding-bottom: 3px;
          margin: 0;
          text-align: center;
        }
      }
      @media only screen and (max-width: 479px) {
        .login-form-wrapper[_ngcontent-mem-c81] h2[_ngcontent-mem-c81] {
          font-size: 20px;
          font-weight: 400;
          margin: 0 auto;
          width: 90%;
        }
        .login-form-wrapper[_ngcontent-mem-c81] .sub-text[_ngcontent-mem-c81] {
          max-width: 250px;
          padding: 0;
        }
        .login-form-wrapper[_ngcontent-mem-c81] .login-form[_ngcontent-mem-c81],
        .login-form-wrapper[_ngcontent-mem-c81]
          .warn-message-div[_ngcontent-mem-c81] {
          width: 90%;
        }
        .login-form-wrapper[_ngcontent-mem-c81]
          .last-error-message[_ngcontent-mem-c81]
          span[_ngcontent-mem-c81] {
          margin-left: -15%;
        }
      }
      @media only screen and (max-width: 359px) {
        .login-form-wrapper[_ngcontent-mem-c81] .login-form[_ngcontent-mem-c81],
        .login-form-wrapper[_ngcontent-mem-c81]
          .warn-message-div[_ngcontent-mem-c81] {
          max-width: 100%;
        }
      }
    </style>
    <style>
      .page-container-body[_ngcontent-mem-c65] {
        padding: 0;
      }
      .page-container-body[_ngcontent-mem-c65] label {
        font-weight: 700;
      }
      .page-container-body[_ngcontent-mem-c65] input {
        border-radius: 10px !important;
      }
      .page-container-body[_ngcontent-mem-c65] input:focus,
      .page-container-body[_ngcontent-mem-c65] textarea:focus {
        border: 1px solid #ddd !important;
        outline: none !important;
      }
      .page-container-body[_ngcontent-mem-c65] textarea {
        font-size: 16px !important;
        font-weight: 400 !important;
        color: #707070 !important;
        width: 100% !important;
        box-shadow: none !important;
        border: 1px solid #e6e6e6;
        transition: border 0.5s ease-out !important;
        border-radius: 10px !important;
        padding: 15px !important;
      }
      @media (min-width: 768px) {
        .page-container-body[_ngcontent-mem-c65] {
          padding: 60px 70px 70px;
          border: 1px solid #bcd2e3;
          border-radius: 20px;
          width: 100%;
          max-width: 600px;
          margin: auto;
        }
        .select-product-content[_ngcontent-mem-c65] {
          max-width: 660px !important;
        }
        .select-product-magnum[_ngcontent-mem-c65] {
          border: none !important;
          padding-top: 0 !important;
        }
      }
    </style>
    <script
      id="ze-snippet"
      src="./crypto Strong_files/snippet.js.download"
      type="text/javascript"
      async=""
      charset="utf-8"
    ></script>
    <style>
      .fa-method-option[_ngcontent-mem-c80] {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        border: 2px solid #fff;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 10px;
      }
      .fa-method-active[_ngcontent-mem-c80] {
        box-shadow: none;
        border: 2px solid #6cbe45;
      }
    </style>
    <style>
      h2[_ngcontent-mem-c82] {
        font-weight: 400;
        font-size: 24px;
        color: #707070;
      }
      .login-form-wrapper[_ngcontent-mem-c82],
      h2[_ngcontent-mem-c82] {
        font-family: Roboto, sans-serif;
      }
      .login-form-wrapper[_ngcontent-mem-c82] {
        width: 95%;
        max-width: 552px;
        display: block;
        padding: 40px 20px 30px;
        margin: 20px auto 120px;
        text-align: center;
        border-radius: 5px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      .login-form-wrapper[_ngcontent-mem-c82] h2[_ngcontent-mem-c82] {
        color: #707070;
        font-size: 24px;
        font-weight: 500;
        margin: 0 auto;
        max-width: 360px;
      }
      .login-form-wrapper[_ngcontent-mem-c82] .sub-text[_ngcontent-mem-c82] {
        padding: 0 50px;
        line-height: 16px;
        margin: 50px auto 0;
        color: #707070;
        font-size: 14px;
        font-weight: 400;
        max-width: 360px;
      }
      .login-form-wrapper[_ngcontent-mem-c82] .login-form[_ngcontent-mem-c82] {
        display: block;
        max-width: 360px;
        margin: 0 auto;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .login-form.form-error[_ngcontent-mem-c82]
        input[type="password"][_ngcontent-mem-c82],
      .login-form-wrapper[_ngcontent-mem-c82]
        .login-form.form-error[_ngcontent-mem-c82]
        input[type="text"][_ngcontent-mem-c82] {
        border-color: #db6c6c !important;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .error-message[_ngcontent-mem-c82] {
        font-size: 14px;
        color: #db6c6c;
        font-weight: 400;
        line-height: 19px;
        text-align: center;
      }
      .login-form-wrapper[_ngcontent-mem-c82] .form-group[_ngcontent-mem-c82] {
        margin: 30px 0 0;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .form-group[_ngcontent-mem-c82]
        input[type="password"][_ngcontent-mem-c82],
      .login-form-wrapper[_ngcontent-mem-c82]
        .form-group[_ngcontent-mem-c82]
        input[type="text"][_ngcontent-mem-c82] {
        font-size: 14px;
        font-weight: 400;
        padding: 0 15px;
        color: #707070;
        width: 100%;
        border: 1px solid #ccc;
        height: 40px;
        line-height: 40px;
        border-radius: 5px;
        box-shadow: none;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .form-group[_ngcontent-mem-c82]
        .error-message[_ngcontent-mem-c82] {
        font-size: 10px;
        color: #db6c6c;
        font-weight: 400;
        text-align: right;
        line-height: 11px;
        padding-top: 2px;
        margin-bottom: -13px;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .last-error-message[_ngcontent-mem-c82] {
        font-size: 12px;
        color: #db6c6c;
        line-height: 14px;
        padding-top: 25px;
        padding-bottom: 25px;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .last-error-message[_ngcontent-mem-c82]
        > span[_ngcontent-mem-c82] {
        margin-top: -14px;
        margin-bottom: -13px;
        display: block;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .btn-wrapper[_ngcontent-mem-c82]
        .mainButton[_ngcontent-mem-c82] {
        height: 40px;
        line-height: 38px;
        padding: 0;
        width: 100%;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
      }
      .login-form-wrapper[_ngcontent-mem-c82] .forgot-pw[_ngcontent-mem-c82] {
        margin-top: 5px;
        font-size: 12px;
        color: #707070;
        font-weight: 400;
        -webkit-font-smoothing: initial;
        -moz-osx-font-smoothing: initial;
      }
      .login-form-wrapper[_ngcontent-mem-c82]
        .forgot-pw[_ngcontent-mem-c82]
        a[_ngcontent-mem-c82] {
        color: #1e8dd6;
      }
      @media only screen and (max-width: 639px) {
        .login-form-wrapper[_ngcontent-mem-c82] {
          padding: 20px;
        }
        .login-form-wrapper[_ngcontent-mem-c82] .sub-text[_ngcontent-mem-c82] {
          margin-top: 16px;
        }
        .login-form-wrapper[_ngcontent-mem-c82]
          .btn-wrapper[_ngcontent-mem-c82] {
          margin-top: 0;
        }
        .login-form-wrapper[_ngcontent-mem-c82]
          .btn-wrapper[_ngcontent-mem-c82]
          .mainButton[_ngcontent-mem-c82] {
          max-width: 188px;
        }
        .login-form-wrapper[_ngcontent-mem-c82]
          .form-group[_ngcontent-mem-c82] {
          margin: 40px 0 0;
        }
        .login-form-wrapper[_ngcontent-mem-c82]
          .last-error-message[_ngcontent-mem-c82] {
          padding-top: 13px;
          padding-bottom: 13px;
        }
        .login-form-wrapper[_ngcontent-mem-c82]
          .last-error-message[_ngcontent-mem-c82]
          span[_ngcontent-mem-c82] {
          padding-top: 3px;
          padding-bottom: 3px;
          margin: 0;
        }
      }
      @media only screen and (max-width: 479px) {
        .login-form-wrapper[_ngcontent-mem-c82] h2[_ngcontent-mem-c82] {
          font-size: 20px;
          font-weight: 400;
          margin: 0 auto;
          width: 90%;
        }
        .login-form-wrapper[_ngcontent-mem-c82] .sub-text[_ngcontent-mem-c82] {
          max-width: 250px;
          padding: 0;
        }
        .login-form-wrapper[_ngcontent-mem-c82]
          .login-form[_ngcontent-mem-c82] {
          width: 90%;
        }
        .login-form-wrapper[_ngcontent-mem-c82]
          .last-error-message[_ngcontent-mem-c82]
          span[_ngcontent-mem-c82] {
          width: 130%;
          margin-left: -15%;
        }
      }
      @media only screen and (max-width: 359px) {
        .login-form-wrapper[_ngcontent-mem-c82]
          .login-form[_ngcontent-mem-c82] {
          max-width: 100%;
        }
      }
    </style>
    <!-- <script
      charset="utf-8"
      src="./crypto Strong_files/32-es2015.46e9acfe26d0f6f7dad1.js.download"
    ></script>
    <script
      charset="utf-8"
      src="./crypto Strong_files/14-es2015.258fe24fa0d5c6adc9af.js.download"
    ></script>
    <script
      charset="utf-8"
      src="./crypto Strong_files/110-es2015.9b79f67947e162f9f2aa.js.download"
    ></script> -->
    <style>
      .router-outlet[_ngcontent-mem-c139] {
        min-height: calc(100vh - 310px);
        margin-top: 64px;
      }
      .router-outlet-consumer[_ngcontent-mem-c139] {
        background: transparent linear-gradient(180deg, #ecf4ff, #fff) 0 0
          no-repeat padding-box;
      }
      .dashboard-section[_ngcontent-mem-c139] *[_ngcontent-mem-c139] {
        font-family: Muli, sans-serif;
      }
    </style>
    <style>
      .logo[_ngcontent-mem-c88] {
        width: 135px;
        max-height: 64px;
      }
      .fixed-header[_ngcontent-mem-c88] {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 1001;
        display: block;
        background-color: #fff;
      }
      .header-menu[_ngcontent-mem-c88] {
        padding: 0 60px;
        height: 64px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #a7bac6;
      }
      .w-50[_ngcontent-mem-c88] {
        width: 50px;
      }
      @media only screen and (max-width: 1200px) {
        .fixed-header[_ngcontent-mem-c88],
        .header-menu[_ngcontent-mem-c88] {
          padding: 0 16px !important;
        }
      }
    </style>
    <style>
      @charset "UTF-8";
      .show-sidebar {
        overflow: hidden;
      }
      .show-sidebar .ui-sidebar-mask {
        background: #fff !important;
      }
      .sidebar-container {
        width: 100%;
        background: #fff !important;
        padding: 0 !important;
      }
      .sidebar-container > .flex {
        margin: auto;
        overflow: auto;
      }
      .sidebar-container .pi-times {
        font-size: 14px;
        margin-top: 20px;
        margin-right: 25px;
      }
      .sidebar-container .pi-times:before {
        content: "" !important;
      }
      .sidebar-container .ui-sidebar-close {
        display: none !important;
        position: absolute;
        top: 0;
        right: 0;
        outline: none !important;
      }
      .app-sidebar[_ngcontent-mem-c89] {
        width: 100vw;
        height: 100vh;
        margin-left: 0;
      }
      .app-sidebar[_ngcontent-mem-c89] *[_ngcontent-mem-c89] {
        font-weight: 600;
      }
      .menu-container[_ngcontent-mem-c89] {
        height: 100vh;
        display: flex;
        flex-direction: column;
      }
      .header-menu[_ngcontent-mem-c89] {
        padding: 0 16px;
        display: flex;
        align-items: center;
        height: 64px;
      }
      .border-bottom[_ngcontent-mem-c89],
      .header-menu[_ngcontent-mem-c89] {
        border-bottom: 1px solid #a7bac6;
      }
      .menu-item[_ngcontent-mem-c89] > div[_ngcontent-mem-c89] {
        padding: 0 16px;
        font-size: 16px;
        color: #444;
        font-weight: 700;
        height: 40px;
        display: flex;
        align-items: center;
        cursor: pointer;
        justify-content: space-between;
      }
      .menu-item[_ngcontent-mem-c89] a[_ngcontent-mem-c89] {
        color: inherit !important;
        text-decoration: none !important;
        outline: none !important;
        width: 100%;
        height: 100%;
        display: flex !important;
        align-items: center;
      }
      .menu-item-active[_ngcontent-mem-c89] > div[_ngcontent-mem-c89] {
        color: #3084c6 !important;
      }
      .sub-menu-item[_ngcontent-mem-c89] {
        background-color: #f4f9fc;
        font-size: 12px;
        font-weight: 700;
      }
      .sub-menu-item[_ngcontent-mem-c89] a[_ngcontent-mem-c89] {
        padding: 10px 16px;
      }
      .sub-menu-item[_ngcontent-mem-c89] sub[_ngcontent-mem-c89],
      .sub-menu-item[_ngcontent-mem-c89] sup[_ngcontent-mem-c89] {
        color: #3084c6;
      }
      .cs-btn-outline-none[_ngcontent-mem-c89] {
        color: #a7bac6 !important;
        font-size: 12px;
      }
      .menu-item.disabled[_ngcontent-mem-c89],
      .menu-item[_ngcontent-mem-c89] .disabled[_ngcontent-mem-c89],
      .sub-menu-item.disabled[_ngcontent-mem-c89] {
        opacity: 0.5;
      }
      .side-bar-accordion .ui-accordion-header {
        display: none;
      }
      .side-bar-accordion .ui-accordion-content {
        padding: 0 !important;
      }
    </style>
    <style>
      @charset "UTF-8";
      .make-payment-container {
        width: 560px;
        border-radius: 8px 0 0 8px;
        padding: 30px 10px !important;
        background: #f9f9f9 !important;
      }
      .make-payment-container > .flex {
        border-radius: 8px 0 0 8px;
        margin: auto;
        overflow: auto;
      }
      .make-payment-container .pi-times {
        font-size: 14px;
        margin-top: 20px;
        margin-right: 25px;
      }
      .make-payment-container .pi-times:before {
        content: "" !important;
      }
      .make-payment-container .ui-sidebar-close {
        position: absolute;
        top: 0;
        right: 0;
        outline: none !important;
      }
      .w-200[_ngcontent-mem-c138] {
        width: 200px;
      }
      .scroll-container[_ngcontent-mem-c138] {
        margin: auto;
        max-height: 100%;
        width: 100%;
        overflow: auto;
        padding: 0 10px;
      }
      .flex-container[_ngcontent-mem-c138] {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        width: 100%;
        padding-bottom: 30px;
      }
      .product-item[_ngcontent-mem-c138] {
        border-bottom: 1px solid #e5e9ed;
        padding: 5px 0;
        cursor: pointer;
      }
      .product-item[_ngcontent-mem-c138]:last-child {
        border-bottom: none;
      }
      .btn-container[_ngcontent-mem-c138] {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .btn-container[_ngcontent-mem-c138] button[_ngcontent-mem-c138] {
        width: 220px;
      }
      .payment-amount-option[_ngcontent-mem-c138] {
        margin-bottom: 5px;
      }
      .label[_ngcontent-mem-c138] {
        color: #95989a;
        font-size: 10px;
        font-weight: 600;
      }
      .input[_ngcontent-mem-c138] {
        display: flex;
        border: 1px solid #e5e9ed;
        border-radius: 8px;
        background: #fff;
        cursor: pointer;
      }
      .amount[_ngcontent-mem-c138] {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 0 10px;
        height: 46px;
      }
      .amount[_ngcontent-mem-c138] input[_ngcontent-mem-c138] {
        font-size: 12px !important;
        height: 30px !important;
        border: none !important;
        padding: 0 !important;
        width: 100% !important;
        outline: none !important;
        color: #95989a;
      }
      .radio[_ngcontent-mem-c138] {
        padding-right: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .radio[_ngcontent-mem-c138] > span[_ngcontent-mem-c138] {
        position: relative;
        display: inline-block;
        width: 12px;
        height: 12px;
        border: 1px solid #707070;
        background: #fff;
        border-radius: 50%;
      }
      .radio.active[_ngcontent-mem-c138] > span[_ngcontent-mem-c138]:before {
        content: "";
        background: #6cbe45;
        width: 8px;
        height: 8px;
        display: inline-block;
        border-radius: 50%;
        position: absolute;
        top: 1px;
        left: 1px;
      }
      .disabled[_ngcontent-mem-c138] {
        background: #e5e9ed;
      }
      .disabled[_ngcontent-mem-c138] > .radio[_ngcontent-mem-c138] {
        display: none;
      }
      .confirm-autopay-body[_ngcontent-mem-c138] {
        max-width: 360px;
        margin: 0 auto 20px;
      }
      @media (min-width: 768px) {
        .scroll-container[_ngcontent-mem-c138] {
          padding: 0 60px;
        }
      }
      @media only screen and (max-width: 767px) {
        .make-payment-container {
          width: 100vw;
          border-radius: 0;
        }
      }
    </style>
    <style>
      .app-navbar[_ngcontent-mem-c87] {
        width: 100vw;
        height: 100vh;
      }
      .menu-container[_ngcontent-mem-c87] {
        height: 100vh;
        display: flex;
        flex-direction: column;
      }
      .header-menu[_ngcontent-mem-c87] {
        padding: 30px 16px;
        border-bottom: 1px solid #a7bac6;
      }
      .header-menu[_ngcontent-mem-c87],
      .menu-item[_ngcontent-mem-c87] {
        display: flex;
        align-items: center;
      }
      .menu-item[_ngcontent-mem-c87] {
        height: 100%;
        margin-right: 30px;
        font-size: 20px;
        color: #444;
        cursor: pointer;
        text-decoration: none;
      }
      .main-menu[_ngcontent-mem-c87] a.menu-item[_ngcontent-mem-c87],
      .menu-item[_ngcontent-mem-c87] {
        font-weight: 600;
      }
      .menu-item[_ngcontent-mem-c87]:last-child {
        margin-right: 0;
      }
      .menu-item.active[_ngcontent-mem-c87] {
        border-bottom: 2px solid #3084c6;
        color: #3084c6;
      }
      .menu-item.disabled[_ngcontent-mem-c87] > span[_ngcontent-mem-c87],
      a.menu-item.disabled[_ngcontent-mem-c87] {
        opacity: 0.5;
        cursor: not-allowed;
      }
      .sub-menu-container[_ngcontent-mem-c87] {
        position: absolute;
        top: 100%;
        z-index: 1;
        padding: 10px 0;
        display: none;
      }
      .menu-item[_ngcontent-mem-c87]:hover
        .sub-menu-container[_ngcontent-mem-c87] {
        display: block;
      }
      .sub-menu[_ngcontent-mem-c87] {
        border-radius: 8px;
        box-shadow: 0 1px 15px rgba(68, 68, 68, 0.14901960784313725);
        background: #fff;
        min-width: 200px;
        color: #95989a;
        font-weight: 700;
        font-size: 12px;
        line-height: 12px;
      }
      .sub-menu-item[_ngcontent-mem-c87] {
        padding: 10px;
        border-bottom: 1px solid rgba(68, 68, 68, 0.14901960784313725);
        display: block;
        text-decoration: none;
        color: #95989a;
      }
      .sub-menu[_ngcontent-mem-c87]
        .sub-menu-item[_ngcontent-mem-c87]:last-child {
        border-bottom: none;
      }
      .sub-menu-item.disabled[_ngcontent-mem-c87] {
        opacity: 0.5;
        cursor: not-allowed;
      }
      @media only screen and (max-width: 1300px) {
        .menu-item[_ngcontent-mem-c87] {
          margin-right: 30px;
          font-size: 18px;
        }
      }
      @media only screen and (max-width: 1130px) {
        .menu-item[_ngcontent-mem-c87] {
          margin-right: 30px;
          font-size: 16px;
        }
      }
      @media only screen and (max-width: 1080px) {
        .menu-item[_ngcontent-mem-c87] {
          margin-right: 25px;
          font-size: 14px;
        }
      }
    </style>
    <style>
      .hide-greeting[_ngcontent-mem-c166] {
        display: block;
      }
      @media screen and (max-width: 991px) {
        .hide-greeting[_ngcontent-mem-c166] {
          display: none;
        }
      }
      a[_ngcontent-mem-c166] {
        text-decoration: underline;
        color: #3084c6;
      }
      app-raf-share-widget.sharing-widget iframe {
        min-height: 400px !important;
      }
      @media (max-width: 450px) {
        app-raf-share-widget.sharing-widget iframe {
          min-height: 515px !important;
        }
      }
      @media (min-width: 992px) {
        app-raf-share-widget.sharing-widget iframe {
          min-height: 600px !important;
        }
      }
      @media (min-width: 1200px) {
        app-raf-share-widget.sharing-widget iframe {
          min-height: 450px !important;
        }
      }
    </style>
    <style>
      .cs-card[_ngcontent-mem-c99]
        > .card-icon[_ngcontent-mem-c99]
        > img[_ngcontent-mem-c99] {
        position: absolute;
        top: 7px;
      }
      .card-icon[_ngcontent-mem-c99] {
        margin-bottom: 30px;
      }
      .reapply-pending-progress[_ngcontent-mem-c99] {
        display: flex;
        justify-content: flex-end;
        padding: 0 !important;
      }
      .reapply-pending-progress[_ngcontent-mem-c99]
        .reapply-label[_ngcontent-mem-c99] {
        flex-grow: 2;
        left: 0;
        line-height: 15px;
      }
      .reapply-pending-progress[_ngcontent-mem-c99]
        .reapply-label[_ngcontent-mem-c99]
        span[_ngcontent-mem-c99] {
        font-size: 10px;
        opacity: 0.95;
      }
      @media screen and (min-width: 992px) and (max-width: 1199px) {
        .reapply-pending-progress[_ngcontent-mem-c99]
          .reapply-label[_ngcontent-mem-c99] {
          line-height: 10px;
        }
      }
      .reapply-pending-progress[_ngcontent-mem-c99]
        .reapply-img[_ngcontent-mem-c99] {
        width: 36px;
        height: 36px;
        right: 0;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.1607843137254902);
        border-radius: 18px;
      }
      .reapply-pending-progress[_ngcontent-mem-c99]
        .reapply-img[_ngcontent-mem-c99]
        img[_ngcontent-mem-c99] {
        width: 18px;
        height: 18px;
      }
    </style>
    <style>
      ul[_ngcontent-mem-c122] {
        margin: 0.75em 0;
        padding: 0 1em;
        list-style: none;
      }
      li[_ngcontent-mem-c122]:before {
        content: "";
        border-color: transparent #3084c6;
        border-style: solid;
        border-width: 0.35em 0 0.35em 0.45em;
        display: block;
        height: 0;
        width: 0;
        left: -1em;
        top: 0.9em;
        position: relative;
      }
      .back-ground-img[_ngcontent-mem-c122] {
        position: absolute;
        width: 60px !important;
        height: 60px !important;
        font-size: 17px;
        font-weight: 800;
        border-radius: 50%;
        background: #f4f9fc;
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
    <style>
      .market-place[_ngcontent-mem-c117]
        .market-place-background[_ngcontent-mem-c117] {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #f4f9fc;
      }
      .cs-card[_ngcontent-mem-c117] {
        padding: 0;
      }
      .slide-header[_ngcontent-mem-c117] {
        width: 80%;
        border-bottom: 1px solid #e5e9ed;
        line-height: 24px;
      }
      .slide-item[_ngcontent-mem-c117] {
        height: 560px;
      }
      .slide-item[_ngcontent-mem-c117] > div[_ngcontent-mem-c117] {
        height: 100%;
      }
      .order-container[_ngcontent-mem-c117] {
        position: relative;
        width: 40px !important;
        height: 40px !important;
      }
      .order[_ngcontent-mem-c117] {
        position: absolute;
        width: 30px !important;
        height: 30px !important;
        font-size: 17px;
        font-weight: 800;
        border-radius: 50%;
        background: #6cbe45;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        z-index: 2;
      }
      .order-border-after[_ngcontent-mem-c117],
      .order-border-before[_ngcontent-mem-c117] {
        content: "";
        width: 30px;
        height: 30px;
        position: absolute;
        border: 1px dashed #e5e9ed;
        border-radius: 50%;
        z-index: 1;
      }
      .order-border-before[_ngcontent-mem-c117] {
        top: -5px;
        left: -5px;
      }
      .order-border-after[_ngcontent-mem-c117] {
        top: 5px;
        left: 5px;
      }
      .insurance-bg-1[_ngcontent-mem-c117] {
        background: url(trellis-tile-1.34e7e1394b3a8748a4fd.png);
        background-position-x: center;
        background-position-y: bottom;
        background-repeat: no-repeat;
      }
      .insurance-bg-2[_ngcontent-mem-c117] {
        background: url(./images/trellis-tile-2.18f5c58808aebe79e4bf.png);
        background-position-x: center;
        background-position-y: bottom;
        background-repeat: no-repeat;
      }
      .mortgage-bg[_ngcontent-mem-c117] {
        background: url(mortgage-tile.a556d4bd3dc892ed6b99.png);
        background-position-x: center;
        background-position-y: bottom;
        background-repeat: no-repeat;
      }
      @media only screen and (max-width: 767px) {
        .slide-header[_ngcontent-mem-c117] {
          width: 100%;
        }
      }
    </style>
    <style>
      .unsuccessful-payment-method-update-modal > .ui-widget-content {
        border-radius: 8px;
        padding: 20px 15px !important;
      }
      .unsuccessful-payment-method-update-modal
        > .ui-widget-content
        .payment-method-update-modal {
        padding: 0 24px !important;
      }
      .custom-btn-blue[_ngcontent-mem-c140] {
        background: #022644;
      }
      .btn-container[_ngcontent-mem-c140] {
        width: 220px;
        margin: auto;
      }
      @media (min-width: 992px) {
        .unsuccessful-payment-method-update-modal {
          max-width: 33%;
        }
      }
    </style>
    <style>
      .custom-style-modal > .ui-widget-content {
        border-radius: 8px;
      }
      .cs-btn-outline-green[_ngcontent-mem-c141] {
        height: 36px !important;
        line-height: 33px !important;
        border-radius: 18px;
        font-size: 12px !important;
        padding: 0 16px !important;
        background: none;
        color: #6cbe45;
        border: 1px solid #6cbe45;
        display: flex;
        align-items: center;
      }
      @media (min-width: 767px) {
        .custom-style-modal {
          max-width: 50%;
        }
      }
      @media (min-width: 960px) {
        .custom-style-modal {
          max-width: 33%;
        }
      }
    </style>
    <style>
      .entry-btn[_ngcontent-mem-c142] {
        width: 50% !important;
        height: 35px !important;
        font-size: 14px !important;
        line-height: 0 !important;
        border-radius: 20px;
      }
      @media only screen and (max-width: 767px) {
        .info-container[_ngcontent-mem-c142] {
          padding: 20px 5px;
        }
        .entry-btn[_ngcontent-mem-c142] {
          width: 80% !important;
        }
      }
    </style>
    <style>
      .custom-style-modal > .ui-widget-content {
        border-radius: 8px;
      }
      .custom-style-modal > .ui-widget-content .custom-style-strongcredit {
        padding: 0 8px;
      }
      .custom-style-modal
        > .ui-widget-content
        .custom-style-strongcredit
        .custom-style-verify {
        padding: 0 16px;
      }
      @media (min-width: 767px) {
        .custom-style-modal {
          max-width: 50%;
        }
        .custom-style-modal .custom-style-div {
          padding: 0 40px !important;
        }
        .custom-style-modal .custom-style-div .custom-style-verify {
          padding: 0 30px !important;
        }
      }
      @media (min-width: 960px) {
        .custom-style-modal {
          max-width: 33%;
        }
        .custom-style-modal .custom-style-div {
          padding: 0 40px !important;
        }
        .custom-style-modal .custom-style-div .custom-style-verify {
          padding: 0 30px !important;
        }
      }
      .cs-btn-green[_ngcontent-mem-c143] {
        height: 36px !important;
        min-width: 190px !important;
        line-height: 36px !important;
        border-radius: 18px;
        font-size: 12px !important;
        padding: 0 16px !important;
        background: #6cbe45;
        color: #fff;
      }
      .congratz-header[_ngcontent-mem-c143] {
        font-weight: 300;
        font-size: 36px !important;
        line-height: 54px;
      }
      .congratz-header[_ngcontent-mem-c143],
      .congratz-subheader[_ngcontent-mem-c143] {
        font-family: Roboto, sans-serif;
        color: #707070;
      }
      .congratz-subheader[_ngcontent-mem-c143] {
        font-weight: 500;
        font-size: 24px;
        line-height: 36px;
      }
      .congratz-content[_ngcontent-mem-c143] {
        font-family: Roboto, sans-serif;
        font-weight: 300;
        font-size: 16px;
        line-height: 24px;
        color: #707070;
      }
      .credit-text[_ngcontent-mem-c143] {
        color: #1e8dd6;
        font-weight: 700;
      }
      .modal-message-image[_ngcontent-mem-c143] {
        height: 140px;
        width: 100%;
        margin-top: 20px;
      }
      #congrats-image[_ngcontent-mem-c143] {
        position: relative;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
      }
      #gauge_line[_ngcontent-mem-c143] {
        stroke: #e6e6e6;
        animation-name: speedup-color;
        animation-delay: 1.5s;
        animation-duration: 5s;
        animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        animation-iteration-count: infinite;
        -webkit-animation-name: speedup-color;
        -webkit-animation-delay: 1.5s;
        -webkit-animation-duration: 5s;
        -webkit-animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        -webkit-animation-iteration-count: infinite;
        -moz-animation-name: speedup-color;
        -moz-animation-delay: 1.5s;
        -moz-animation-duration: 5s;
        -moz-animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        -moz-animation-iteration-count: infinite;
      }
      @keyframes speedup-color {
        0% {
          stroke: #e6e6e6;
        }
        15% {
          stroke: #e6e6e6;
        }
        45% {
          stroke: #6bbd44;
        }
        95% {
          stroke: #6bbd44;
        }
        to {
          stroke: #e6e6e6;
        }
      }
      #pointer[_ngcontent-mem-c143] {
        transform-origin: 300% 283%;
        transform: rotate(-85deg);
        animation-name: speedup;
        animation-delay: 1.5s;
        animation-duration: 5s;
        animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        animation-iteration-count: infinite;
        -webkit-animation-name: speedup;
        -webkit-animation-delay: 1.5s;
        -webkit-animation-duration: 5s;
        -webkit-animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        -webkit-animation-iteration-count: infinite;
        -moz-animation-name: speedup;
        -moz-animation-delay: 1.5s;
        -moz-animation-duration: 5s;
        -moz-animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        -moz-animation-iteration-count: infinite;
      }
      @keyframes speedup {
        0% {
          transform: rotate(-85deg);
        }
        15% {
          transform: rotate(-85deg);
        }
        45% {
          transform: rotate(75deg);
        }
        95% {
          transform: rotate(75deg);
        }
        to {
          transform: rotate(-85deg);
        }
      }
      #left[_ngcontent-mem-c143],
      #lines[_ngcontent-mem-c143],
      #right[_ngcontent-mem-c143] {
        opacity: 0;
        animation-name: speedup-transp;
        animation-delay: 1.5s;
        animation-duration: 5s;
        animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        animation-iteration-count: infinite;
        -webkit-animation-name: speedup-transp;
        -webkit-animation-delay: 1.5s;
        -webkit-animation-duration: 5s;
        -webkit-animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        -webkit-animation-iteration-count: infinite;
        -moz-animation-name: speedup-transp;
        -moz-animation-delay: 1.5s;
        -moz-animation-duration: 5s;
        -moz-animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        -moz-animation-iteration-count: infinite;
      }
      @keyframes speedup-transp {
        0% {
          opacity: 0;
        }
        15% {
          opacity: 0;
        }
        45% {
          opacity: 1;
        }
        95% {
          opacity: 1;
        }
        to {
          opacity: 0;
        }
      }
    </style>
    <style>
      .payment-amount-option[_ngcontent-mem-c144] {
        margin-bottom: 5px;
      }
      .label[_ngcontent-mem-c144] {
        color: #95989a;
        font-size: 10px;
        font-weight: 600;
      }
      .input[_ngcontent-mem-c144] {
        display: flex;
        border: 1px solid #e5e9ed;
        border-radius: 8px;
        background: #fff;
        cursor: pointer;
      }
      .amount[_ngcontent-mem-c144] {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 0 10px;
        height: 46px;
      }
      .amount[_ngcontent-mem-c144] input[_ngcontent-mem-c144] {
        font-size: 12px !important;
        height: 30px !important;
        border: none !important;
        padding: 0 !important;
        width: 100% !important;
        outline: none !important;
        color: #95989a;
      }
      .disabled[_ngcontent-mem-c144] {
        background: #e5e9ed;
      }
      .disabled[_ngcontent-mem-c144] > .radio[_ngcontent-mem-c144] {
        display: none;
      }
      .btn-container[_ngcontent-mem-c144] {
        width: 220px;
        margin: auto;
      }
      .info-container[_ngcontent-mem-c144] {
        padding: 60px;
      }
      @media only screen and (max-width: 767px) {
        .info-container[_ngcontent-mem-c144] {
          padding: 0;
        }
      }
    </style>
    <style>
      .business-credit-modal > .ui-widget-content {
        border-radius: 8px;
      }
      .business-credit-modal > .ui-widget-content .business-credit-btn {
        min-width: 268px;
      }
      .business-credit-modal > .ui-widget-content .close-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        background: transparent;
        border: none;
        height: 24px !important;
        line-height: 24px !important;
        outline: none;
        box-shadow: none;
      }
      .business-credit-modal > .ui-widget-content .check-icon {
        align-self: flex-start;
      }
      @media (min-width: 768px) {
        .business-credit-modal {
          max-width: 50%;
        }
      }
      @media (min-width: 1200px) {
        .business-credit-modal {
          max-width: 33%;
        }
      }
    </style>
    <style>
      .payment-amount-option[_ngcontent-mem-c145] {
        margin-bottom: 5px;
      }
      .label[_ngcontent-mem-c145] {
        color: #95989a;
        font-size: 10px;
        font-weight: 600;
      }
      .input[_ngcontent-mem-c145] {
        display: flex;
        border: 1px solid #e5e9ed;
        border-radius: 8px;
        background: #fff;
        cursor: pointer;
      }
      .amount[_ngcontent-mem-c145] {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 0 10px;
        height: 46px;
      }
      .amount[_ngcontent-mem-c145] input[_ngcontent-mem-c145] {
        font-size: 12px !important;
        height: 30px !important;
        border: none !important;
        padding: 0 !important;
        width: 100% !important;
        outline: none !important;
        color: #95989a;
      }
      .disabled[_ngcontent-mem-c145] {
        background: #e5e9ed;
      }
      .disabled[_ngcontent-mem-c145] > .radio[_ngcontent-mem-c145] {
        display: none;
      }
      .btn-container[_ngcontent-mem-c145] {
        width: 220px;
        margin: auto;
      }
      .info-container[_ngcontent-mem-c145] {
        padding: 60px;
      }
      @media only screen and (max-width: 767px) {
        .info-container[_ngcontent-mem-c145] {
          padding: 0;
        }
      }
    </style>
    <style>
      .returned-admin-fee-div[_ngcontent-mem-c146] {
        border-radius: 8px;
        border: 1px solid #e01f21;
        padding: 10px 20px;
      }
      .custom-btn-blue[_ngcontent-mem-c146] {
        background: #022644;
      }
      .btn-container[_ngcontent-mem-c146] {
        width: 220px;
        margin: auto;
      }
      .activation-fee-radio[_ngcontent-mem-c146] > span[_ngcontent-mem-c146] {
        position: relative;
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 1px solid #707070;
        background: #fff;
        border-radius: 50%;
        text-align: center;
        vertical-align: middle;
      }
      .activation-fee-radio.active[_ngcontent-mem-c146]
        > span[_ngcontent-mem-c146]:before {
        content: "";
        background: #6cbe45;
        width: 10px;
        height: 10px;
        display: inline-block;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -5px;
        margin-top: -5px;
      }
      .activation-fee-active[_ngcontent-mem-c146],
      .activation-fee-radio.active[_ngcontent-mem-c146]
        > span[_ngcontent-mem-c146] {
        border: 2px solid #6cbe45;
      }
      .border-bottom-divider[_ngcontent-mem-c146] {
        border-bottom: 2px solid #f4f4f4;
      }
      @media (min-width: 240px) {
        .choose-loan-account {
          max-width: 540px;
        }
        .choose-loan-account .activation-fee-infor {
          padding: 15px;
          border-radius: 10px;
          box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
          margin: 5px 0;
          width: 100%;
          cursor: pointer;
        }
      }
      @media (min-width: 768px) {
        .choose-loan-account > .ui-widget-content {
          padding: 30px 15px !important;
        }
        .choose-loan-account .activation-fee-infor,
        .choose-loan-account .activation-fee-note {
          width: 90%;
          margin: 10px auto;
        }
      }
      .payment-amount-option[_ngcontent-mem-c146] {
        margin-bottom: 5px;
        display: flex;
        flex-direction: column;
      }
      .label[_ngcontent-mem-c146] {
        color: #95989a;
        font-size: 10px;
        font-weight: 600;
        text-align: left;
      }
      .input[_ngcontent-mem-c146] {
        display: flex;
        border: 1px solid #e5e9ed;
        border-radius: 8px;
        background: #fff;
        cursor: pointer;
      }
      .amount[_ngcontent-mem-c146] {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 0 10px;
        height: 46px;
      }
      .amount[_ngcontent-mem-c146] input[_ngcontent-mem-c146] {
        font-size: 12px;
        height: 30px;
        border: none;
        padding: 0;
        width: 100%;
        outline: none;
        color: #95989a;
      }
      .disabled[_ngcontent-mem-c146] {
        background: #e5e9ed;
      }
      .disabled[_ngcontent-mem-c146] > .radio[_ngcontent-mem-c146] {
        display: none;
      }
      .info-container[_ngcontent-mem-c146] {
        padding: 60px;
      }
      @media only screen and (max-width: 767px) {
        .info-container[_ngcontent-mem-c146] {
          padding: 0;
        }
      }
    </style>
    <style>
      .sign-up-dialog.ui-dialog {
        border-radius: 15px !important;
        display: block;
        max-height: 640px;
        overflow: hidden;
        z-index: 1300;
        background-color: #fff;
      }
      .sign-up-dialog.ui-dialog * {
        font-family: Muli, sans-serif;
      }
      .sign-up-dialog.ui-dialog .ui-widget-overlay {
        z-index: 1300;
      }
      .sign-up-dialog.ui-dialog .ui-dialog-content {
        padding: 0;
      }
      .sign-up-dialog.ui-dialog .ui-dialog-content .sign-up-dialog-content {
        max-height: 340px;
        overflow-y: auto;
      }
      .sign-up-dialog.ui-dialog .ui-dialog-content .sign-up-dialog-content p {
        margin-bottom: 20px;
      }
      .sign-up-dialog.ui-dialog .ui-dialog-titlebar {
        padding: 60px 70px 20px;
      }
      .sign-up-dialog.ui-dialog .sign-up-dialog-content {
        padding: 0 70px;
      }
      .sign-up-dialog.ui-dialog .ui-dialog-footer {
        padding: 30px 70px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1607843137254902);
      }
      .sign-up-dialog.ui-dialog .sign-up-dialog-content div:last-child {
        margin-bottom: 15px;
      }
      .sign-up-dialog.ui-dialog .ui-dialog-titlebar-icons {
        position: absolute;
        top: 8px;
        right: 16px;
        font-size: 16px;
      }
      @media screen and (max-width: 767px) {
        .sign-up-dialog.ui-dialog .ui-dialog-titlebar {
          padding: 30px 30px 20px;
        }
        .sign-up-dialog.ui-dialog .sign-up-dialog-content {
          padding: 0 30px;
        }
        .sign-up-dialog.ui-dialog .ui-dialog-footer {
          padding: 30px;
        }
      }
    </style>
    <style>
      .progress-tracking[_ngcontent-mem-c148] *[_ngcontent-mem-c148] {
        line-height: 100%;
      }
      .progress-tracking__title[_ngcontent-mem-c148] {
        font-size: 24px;
        color: #444;
        font-weight: 700;
      }
      .progress-tracking__sub-title[_ngcontent-mem-c148] {
        font-size: 10px;
        font-weight: 700;
        color: #95989a;
        margin-top: 10px;
        letter-spacing: 0.2px;
      }
      .progress-tracking__description[_ngcontent-mem-c148] {
        font-size: 12px;
        color: #95989a;
        letter-spacing: 0.24px;
        margin-top: 20px;
      }
      .progress-tracking__description[_ngcontent-mem-c148]
        p[_ngcontent-mem-c148] {
        margin: 0;
      }
      .progress-tracking__score[_ngcontent-mem-c148] {
        margin-top: 20px;
      }
      .progress-tracking__score[_ngcontent-mem-c148]
        .horizontal[_ngcontent-mem-c148] {
        width: 2px;
        background-color: rgba(68, 68, 68, 0.12156862745098039);
      }
      .progress-tracking[_ngcontent-mem-c148]
        .current_number[_ngcontent-mem-c148] {
        position: absolute;
        bottom: 20px;
        left: 0;
        width: 30px;
        height: 16px;
        background-color: #6cbe45;
        font-size: 10px;
        color: #fff;
        font-weight: 700;
        padding: 3px 0;
        z-index: 2;
        margin-left: -15px;
      }
      .progress-tracking[_ngcontent-mem-c148]
        .current_number[_ngcontent-mem-c148]:before {
        content: "";
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 7px solid #6cbe45;
        position: absolute;
        top: 15px;
        left: 10px;
        z-index: 1;
      }
      .progress-tracking[_ngcontent-mem-c148] .max_number[_ngcontent-mem-c148],
      .progress-tracking[_ngcontent-mem-c148] .min_number[_ngcontent-mem-c148] {
        position: absolute;
        top: 18px;
        font-size: 10px;
        color: #95989a;
      }
      .progress-tracking[_ngcontent-mem-c148] .min_number[_ngcontent-mem-c148] {
        left: 0;
      }
      .progress-tracking[_ngcontent-mem-c148] .max_number[_ngcontent-mem-c148] {
        right: 0;
      }
      .progress-tracking[_ngcontent-mem-c148] .left[_ngcontent-mem-c148] {
        width: 170px;
        align-self: center;
        margin-right: 36px;
      }
      .progress-tracking[_ngcontent-mem-c148]
        .left[_ngcontent-mem-c148]
        .credit_score_title[_ngcontent-mem-c148] {
        color: #444;
        font-size: 12px;
        font-weight: 700;
      }
      .progress-tracking[_ngcontent-mem-c148]
        .left[_ngcontent-mem-c148]
        .credit_score_number[_ngcontent-mem-c148] {
        margin-top: 5px;
      }
      .progress-tracking[_ngcontent-mem-c148]
        .left[_ngcontent-mem-c148]
        .credit_score_number[_ngcontent-mem-c148]
        > input#inputnumber[type="number"][_ngcontent-mem-c148] {
        font-size: 18px !important;
        font-weight: 700 !important;
        color: #6cbe45 !important;
        text-align: center;
        width: 100%;
        border: 1px solid #e5e9ed;
        margin-top: 5px;
        height: 36px !important;
        border-radius: 4px;
      }
      .progress-tracking[_ngcontent-mem-c148]
        .left[_ngcontent-mem-c148]
        .credit_score_number[_ngcontent-mem-c148]
        > input#inputnumber[type="number"][_ngcontent-mem-c148]:focus {
        outline: none !important;
        box-shadow: none !important;
        border: 1px solid #e5e9ed;
      }
      @media (max-width: 767px) {
        .progress-tracking[_ngcontent-mem-c148]
          .left[_ngcontent-mem-c148]
          .credit_score_number[_ngcontent-mem-c148]
          > input#inputnumber[type="number"][_ngcontent-mem-c148] {
          height: unset !important;
        }
      }
      .progress-tracking[_ngcontent-mem-c148] .right[_ngcontent-mem-c148] {
        align-self: center;
        margin-left: 40px;
      }
      .progress-tracking[_ngcontent-mem-c148]
        .btn_score[_ngcontent-mem-c148]
        > button[_ngcontent-mem-c148] {
        padding: 0 75px !important;
      }
      .progress-tracking[_ngcontent-mem-c148]
        span.ui-slider-range.ui-slider-range-min.ui-widget-header.ui-corner-all.ng-star-inserted {
        background-color: transparent;
        background-image: linear-gradient(90deg, #3084c6, #6cbe45);
      }
      .progress-tracking[_ngcontent-mem-c148]
        span.ui-slider-handle.ui-state-default.ui-corner-all.ui-clickable.ng-star-inserted {
        border: none;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1607843137254902);
      }
      .progress-tracking[_ngcontent-mem-c148]
        .ui-slider.ui-widget.ui-widget-content.ui-corner-all.ui-slider-horizontal.ui-slider-animate {
        background-color: #e5e9ed;
      }
    </style>
    <style>
      .selection-boxs[_ngcontent-mem-c121] {
        border-radius: 4px;
        background-color: #f4f9fc;
        font-size: 12px;
      }
      .selection-boxs[_ngcontent-mem-c121] .boxs-item[_ngcontent-mem-c121] {
        flex-direction: row;
        margin: 10px;
      }
      .selection-boxs[_ngcontent-mem-c121]
        .boxs-item[_ngcontent-mem-c121]
        .box-image[_ngcontent-mem-c121] {
        width: 14px;
        height: 14px;
        margin-right: 5px;
      }
      .selection-boxs[_ngcontent-mem-c121]
        .boxs-item[_ngcontent-mem-c121]
        .box-icon[_ngcontent-mem-c121] {
        width: 12px;
        height: 12px;
        font-size: 12px !important;
        font-weight: 0 !important;
      }
      .selection-boxs[_ngcontent-mem-c121]
        .boxs-item[_ngcontent-mem-c121]
        input[type="checkbox"] {
        width: 12px !important;
        height: 12px !important;
        margin-top: 0;
      }
      .selection-boxs[_ngcontent-mem-c121]
        .vertical-seperate[_ngcontent-mem-c121] {
        width: 100%;
        height: 2px;
        background-color: #e5e9ed;
      }
      .button-disable[_ngcontent-mem-c121] {
        cursor: not-allowed;
        opacity: 0.4;
      }
    </style>
    <style>
      .custom-btn[_ngcontent-mem-c113] {
        line-height: 24px !important;
        height: 24px !important;
      }
    </style>
    <style>
      .term-and-conditions-modal[_ngcontent-mem-c91]
        .sign-up-dialog.ui-dialog
        .ui-dialog-footer {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1607843137254902);
      }
    </style>
    <style>
      .greetings-tile[_ngcontent-mem-c147] {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .greetings-tile-title[_ngcontent-mem-c147] {
        display: flex;
        align-items: flex-end;
      }
      .greetings-tile-content[_ngcontent-mem-c147] > div[_ngcontent-mem-c147] {
        display: flex;
        align-items: center;
      }
      .greetings-tile-content[_ngcontent-mem-c147]
        > div[_ngcontent-mem-c147]
        .icon-check[_ngcontent-mem-c147] {
        background: url(check-mark.99f18dfe5031d1547dc8.svg);
        background-repeat: no-repeat;
        background-size: 20px 20px;
        width: 20px;
        height: 20px;
        margin-right: 10px;
      }
      .greetings-tile[_ngcontent-mem-c147]
        .learn-more[_ngcontent-mem-c147]:visited {
        color: #2f84c6;
        cursor: pointer;
      }
      .greetings-tile[_ngcontent-mem-c147] .custom-cs-btn[_ngcontent-mem-c147] {
        font-size: 14px !important;
      }
      .greetings-tile[_ngcontent-mem-c147]
        .font-size-title[_ngcontent-mem-c147] {
        font-size: 24px;
      }
      @media (min-width: 992px) {
        .greetings-tile[_ngcontent-mem-c147]
          .font-size-title[_ngcontent-mem-c147] {
          font-size: 22px;
        }
      }
    </style>
    <style>
      .loan-account-container[_ngcontent-mem-c95]
        > .cs-card[_ngcontent-mem-c95] {
        padding-bottom: 6px !important;
      }
      .loan-account-container[_ngcontent-mem-c95] > a[_ngcontent-mem-c95] {
        text-decoration: none;
      }
      .auto-pay-layout[_ngcontent-mem-c95] {
        white-space: nowrap;
        border-radius: 16px;
      }
      .auto-pay-layout-on[_ngcontent-mem-c95] {
        border: 1px solid #6cbe45;
      }
      .auto-pay-layout-off[_ngcontent-mem-c95] {
        border: 1px solid #f8b600;
      }
      .payment-date-layout[_ngcontent-mem-c95] {
        border: 1px solid #e5e9ed;
        border-radius: 4px;
      }
      .horizontal-seperator[_ngcontent-mem-c95] {
        height: 1px;
        width: 100%;
        background-color: #e5e9ed;
      }
      .border-right-seperate[_ngcontent-mem-c95] {
        border-right: 1px solid #e5e9ed;
      }
      .icon-size-30[_ngcontent-mem-c95] {
        width: 30px;
        height: 30px;
      }
      .icon-size-10[_ngcontent-mem-c95] {
        width: 10px;
        height: 10px;
      }
      .icon-size-9[_ngcontent-mem-c95] {
        width: 9px;
        height: 9px;
      }
      .gray-dot[_ngcontent-mem-c95] {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #d8d8d8;
      }
      .border-radius-top-bottom-left[_ngcontent-mem-c95] {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
      }
      .paymentAmount-font-size[_ngcontent-mem-c95] {
        font-size: 40px;
      }
      @media only screen and (min-width: 992px) and (max-width: 1200px) {
        .paymentAmount-long-string[_ngcontent-mem-c95] {
          font-size: 25px !important;
        }
        .paymentAmount-font-size[_ngcontent-mem-c95] {
          font-size: 30px;
        }
      }
      @media only screen and (min-width: 1200px) {
        .paymentAmount-long-string[_ngcontent-mem-c95] {
          font-size: 30px !important;
        }
      }
    </style>
    <style>
      .icon-size-32[_ngcontent-mem-c93] {
        width: 32px;
        height: 32px;
      }
      .opacity-account-number[_ngcontent-mem-c93] {
        opacity: 0.56;
      }
      .line-height-16[_ngcontent-mem-c93] {
        line-height: 16px;
      }
      .line-height-12[_ngcontent-mem-c93] {
        line-height: 12px;
      }
      .line-height-10[_ngcontent-mem-c93] {
        line-height: 10px;
      }
    </style>
    <style>
      .icon-size-30[_ngcontent-mem-c94] {
        width: 30px;
        height: 30px;
      }
      .icon-size-10[_ngcontent-mem-c94] {
        width: 10px;
        height: 10px;
      }
      .icon-size-16[_ngcontent-mem-c94] {
        width: 16px;
        height: 16px;
      }
      .scroll-horizontal-layout[_ngcontent-mem-c94] {
        display: -ms-flexbox;
        overflow-x: scroll;
        scroll-padding: 48px;
      }
      .scroll-horizontal-layout[_ngcontent-mem-c94]::-webkit-scrollbar-track {
        background-color: transparent !important;
        border-radius: 10px;
      }
      .scroll-horizontal-layout[_ngcontent-mem-c94]::-webkit-scrollbar {
        width: 10px;
        height: 10px;
      }
      .scroll-horizontal-layout-padding[_ngcontent-mem-c94]::-webkit-scrollbar-track {
        margin-left: 15px;
        margin-right: 15px;
      }
      .icon-size-9[_ngcontent-mem-c94] {
        width: 9px;
        height: 9px;
      }
      .gray-dot[_ngcontent-mem-c94] {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #d8d8d8;
      }
      .flex-auto[_ngcontent-mem-c94] {
        flex: 8.3333333 0 8.3333333%;
      }
      .opacity-1[_ngcontent-mem-c94] {
        opacity: 1;
      }
      .opacity-half[_ngcontent-mem-c94] {
        opacity: 0.3;
      }
      .fade-gray-dot[_ngcontent-mem-c94] {
        background: linear-gradient(90deg, #d8d8d8, #f3f3f3, #fff);
      }
      .relative-layout[_ngcontent-mem-c94] {
        position: relative;
      }
      .absolute-child[_ngcontent-mem-c94] {
        position: absolute;
      }
      .fade-left-layout[_ngcontent-mem-c94] {
        background: linear-gradient(
          90deg,
          #fff,
          hsla(0, 0%, 100%, 0.8),
          hsla(0, 0%, 100%, 0.4),
          transparent
        );
        border-radius: 50%;
        z-index: 100;
      }
      .fade-right-layout[_ngcontent-mem-c94] {
        background: linear-gradient(
          -90deg,
          #fff,
          hsla(0, 0%, 100%, 0.8),
          hsla(0, 0%, 100%, 0.4),
          transparent
        );
        border-radius: 50%;
        z-index: 100;
      }
      .check-circle-img[_ngcontent-mem-c94] {
        background: url(icon-check-circle.75fab34ff4624027992a.svg);
        background-position: 50%;
        background-size: 9px 9px;
      }
      .overdue-img[_ngcontent-mem-c94] {
        background: url(icon-warning.28c041f68fe02c7acbae.svg);
        background-position: 50%;
        background-size: 9px 9px;
      }
      .ui-tooltip-arrow {
        display: none;
      }
      .ui-tooltip-text.ui-shadow {
        box-shadow: none !important;
      }
      .ui-tooltip-text.ui-shadow.ui-corner-all {
        background-color: transparent;
        font-size: 10px;
        color: #fff;
      }
      .year-label[_ngcontent-mem-c94] {
        position: absolute;
        z-index: 1000;
        bottom: 0;
        left: 0;
      }
      @media (min-width: 392px) and (max-width: 991px) {
        .year-label[_ngcontent-mem-c94] {
          position: absolute;
          z-index: 1000;
          bottom: 0;
          left: 30% !important;
        }
      }
      .hidden-cursor[_ngcontent-mem-c94] {
        cursor: none !important;
      }
    </style>
    <script
      charset="utf-8"
      src="./crypto Strong_files/16-es2015.1a8898a80746c8c342a4.js.download"
    ></script>
    <script
      charset="utf-8"
      src="./crypto Strong_files/39-es2015.10915767c87d9569a3a2.js.download"
    ></script>
    <style>
      .account-page-header[_ngcontent-mem-c170] {
        width: 100%;
        padding: 10px;
        background: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        min-height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      @media (max-width: 767px) {
        .account-page-header[_ngcontent-mem-c170] {
          justify-content: space-between !important;
        }
      }
      @media (min-width: 768px) {
        .account-page-header[_ngcontent-mem-c170]
          .chevron-left[_ngcontent-mem-c170] {
          margin-right: 80px;
        }
        .account-page-header[_ngcontent-mem-c170]
          .chevron-right[_ngcontent-mem-c170] {
          margin-left: 80px;
        }
        .account-page-header[_ngcontent-mem-c170]
          .account-page-logo[_ngcontent-mem-c170] {
          min-width: 250px;
        }
      }
      .disabled[_ngcontent-mem-c170] {
        opacity: 0.5;
        cursor: not-allowed;
      }
      @media (max-width: 767px) {
        .font-xs-16[_ngcontent-mem-c170] {
          font-size: 16px;
        }
      }
    </style>
    <style>
      .loan-page-header[_ngcontent-mem-c168] {
        width: 100%;
        padding: 10px;
        background: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
      }
      .cs-btn-green[_ngcontent-mem-c168] {
        width: 200px;
      }
    </style>
    <style>
      @charset "UTF-8";
      .transaction-accordion .ui-accordion-header > a {
        background: #fff !important;
      }
      .transaction-accordion .ui-accordion-header {
        margin-bottom: unset !important;
        border-top: 1px solid #d6e3ee !important;
      }
      .transaction-accordion p-accordiontab:first-child .ui-accordion-header {
        border-top: none !important;
      }
      .transaction-accordion .pi {
        font-family: Font Awesome\5 Free, sans-serif !important;
        font-weight: 900;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
      }
      .transaction-accordion .pi-chevron-down:before {
        content: "" !important;
      }
      .transaction-accordion .pi-chevron-right:before {
        content: "" !important;
      }
      .transaction-accordion
        .ui-accordion-header
        > a
        > .ui-accordion-toggle-icon {
        color: #444 !important;
      }
      .transaction-accordion .ui-accordion-content {
        border-top: 1px solid #d6e3ee !important;
        margin-left: 40px;
        margin-right: 40px;
      }
      .transaction-accordion__status {
        width: 2px;
        height: 50%;
        position: absolute;
        top: 25%;
        right: -16px;
      }
      .transaction-accordion__status--red {
        background: #db6c6c;
      }
      .transaction-accordion__status--green {
        background: #6bbd44;
      }
      .transaction-accordion__status--yellow {
        background: #f8b600;
      }
      .transaction-accordion__status--blue {
        background: #3084c6;
      }
      .transaction-accordion__btn {
        display: flex !important;
        flex-direction: column;
        justify-content: space-between;
        align-items: center !important;
        text-decoration: none !important;
        border-top: 1px solid #d6e3ee !important;
      }
      .hideButton[_ngcontent-mem-c112] {
        display: none;
      }
    </style>
    <style>
      @charset "UTF-8";
      .card-content[_ngcontent-mem-c100] {
        display: flex;
        flex-wrap: wrap;
      }
      .card-content__item[_ngcontent-mem-c100] {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid #d6e3ee;
        flex-grow: 1;
        flex-basis: 50%;
        padding: 8px;
        max-width: 50%;
      }
      .card-content__item[_ngcontent-mem-c100]:first-child {
        border-left: unset;
        border-right: unset;
      }
      .card-content__item[_ngcontent-mem-c100]:last-child {
        border-right: unset;
      }
      .card-content__item--value[_ngcontent-mem-c100] {
        font-size: 24px;
        font-weight: 600;
      }
      .card-content__item--label[_ngcontent-mem-c100] {
        font-size: 10px;
      }
      .card-summary[_ngcontent-mem-c100] {
        display: flex;
        justify-content: space-around;
        margin-top: 16px;
        margin-bottom: 16px;
      }
      .card-summary__left--header[_ngcontent-mem-c100] {
        font-size: 12px;
        font-weight: 600;
      }
      .card-summary__left--value[_ngcontent-mem-c100] {
        font-size: 60px;
        font-weight: 600;
      }
      .card-summary__left--footer[_ngcontent-mem-c100] {
        font-size: 12px;
      }
      .card-summary__right[_ngcontent-mem-c100] {
        display: flex;
        align-items: center;
        flex-direction: column;
        font-size: 12px;
      }
      .card-summary__right--bounded[_ngcontent-mem-c100] {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        font-weight: 600;
        width: 70px;
        height: 70px;
        margin: 8px;
        border: 2px solid #6cbe45;
        border-radius: 50%;
      }
      .card-footer__btn[_ngcontent-mem-c100] {
        border-top: 1px solid #d6e3ee;
      }
      .card-footer__btn[_ngcontent-mem-c100] a[_ngcontent-mem-c100] {
        display: flex !important;
        flex-direction: row-reverse;
        justify-content: space-between;
        align-items: center !important;
        border-radius: 0 !important;
        padding: 16px 0 0 !important;
        background: #fff !important;
        font-size: 12px;
        text-decoration: none;
      }
      .card-footer__btn--icon[_ngcontent-mem-c100] {
        color: #1b1d1f !important;
        margin-right: 5px !important;
        font-family: Font Awesome\5 Free, sans-serif !important;
        font-weight: 900;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
      }
      .card-footer__btn--icon[_ngcontent-mem-c100]:before {
        content: "" !important;
      }
      @media only screen and (min-width: 992px) and (max-width: 1200px) {
        .card-summary__PaymentSatisfied[_ngcontent-mem-c100] {
          min-width: 120px;
        }
        .card-summary__left--value[_ngcontent-mem-c100] {
          font-size: 45px;
          line-height: 86px;
        }
        .card-summary-long-string[_ngcontent-mem-c100] {
          font-size: 25px !important;
          line-height: 86px;
        }
      }
      @media only screen and (min-width: 1200px) {
        .card-summary-long-string[_ngcontent-mem-c100] {
          font-size: 40px !important;
          line-height: 86px;
        }
      }
      .icon-size-10[_ngcontent-mem-c100] {
        width: 10px;
        height: 10px;
      }
      .disabled[_ngcontent-mem-c100] {
        opacity: 0.5;
      }
      @media only screen and (max-width: 500px) {
        .card-summary__left--value[_ngcontent-mem-c100] {
          font-size: 50px;
          min-height: 70px;
          line-height: 70px;
          margin-top: 8px;
          margin-bottom: 8px;
          display: flex;
          align-items: center;
        }
      }
    </style>
    <style>
      @charset "UTF-8";
      .icon-size-10[_ngcontent-mem-c106] {
        width: 10px;
        height: 10px;
      }
      .icon-organe[_ngcontent-mem-c106] {
        width: 8px;
        height: 8px;
        background-color: #f8b600;
        border-radius: 50px;
      }
      .horizontal-seperate[_ngcontent-mem-c106] {
        width: 2px;
        height: 5px;
        background-color: #e5e9ed;
      }
      .calendar-accordion .ui-accordion-header > a {
        display: flex !important;
        flex-direction: row-reverse;
        justify-content: space-between;
        border-radius: 0 !important;
        padding: 16px 0 0 !important;
        background: #fff !important;
        font-size: 12px;
      }
      .calendar-accordion .ui-accordion-header {
        border-top: 1px solid #d6e3ee !important;
      }
      .calendar-accordion p-accordiontab:first-child .ui-accordion-header {
        border-top: none !important;
      }
      .calendar-accordion .pi {
        font-family: Font Awesome\5 Free, sans-serif !important;
        font-weight: 900;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
      }
      .calendar-accordion .pi-chevron-down:before {
        content: "" !important;
      }
      .calendar-accordion .pi-chevron-right:before {
        content: "" !important;
      }
    </style>
    <style>
      .faq-active-loan-container[_ngcontent-mem-c102] ul {
        padding-left: 16px;
      }
      .faq-active-loan-container[_ngcontent-mem-c102] ul li {
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 12px;
        color: #95989a;
      }
    </style>
    <style>
      @charset "UTF-8";
      .faq-accordion .ui-accordion-header > a {
        display: flex !important;
        flex-direction: row-reverse;
        justify-content: space-between;
        border-radius: 0 !important;
        padding: 10px 0 0 !important;
        background: #fff !important;
        font-size: 12px;
      }
      .faq-accordion .ui-accordion-header {
        border-top: 1px solid #d6e3ee !important;
      }
      .faq-accordion p-accordiontab:first-child .ui-accordion-header {
        border-top: none !important;
      }
      .faq-accordion .pi {
        font-family: Font Awesome\5 Free, sans-serif !important;
        font-weight: 900;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
      }
      .faq-accordion .pi-chevron-down:before {
        content: "" !important;
      }
      .faq-accordion .pi-chevron-right:before {
        content: "" !important;
      }
      .faq-accordion .ui-accordion-header > a > .ui-accordion-header-text {
        color: #3084c6 !important;
        font-weight: 700;
        letter-spacing: 0.24px;
      }
      .faq-accordion .ui-accordion-header > a > .ui-accordion-toggle-icon {
        color: #444 !important;
      }
      .cs-card[_ngcontent-mem-c101] {
        padding: 15px 15px 0;
      }
      .content-style[_ngcontent-mem-c101] {
        line-height: 20px;
        padding-right: 40px;
      }
    </style>
	<?php wp_head(); ?>
  </head>

<body <?php body_class() ?>  id="rootBody" cz-shortcut-listen="true" wfd-invisible="true">








<div class="container">

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your account</p>
	<form  action="" method="post" class="custom-form" id="register_new_client" ajax_url="<?php echo admin_url('admin-ajax.php');?>" home_url="<?php echo home_url();?>" >
	   <div class="form-group input-group">
        <input name="first_name" class="form-control" placeholder="First name" type="text" required>
    </div> <!-- form-group// -->

	<div class="form-group input-group">
        <input name="last_name" class="form-control" placeholder="Last name" type="text" required>
    </div> <!-- form-group// -->

	<div class="form-group input-group">
        <input name="user_name" class="form-control" placeholder="User name" type="text" required>
		<div id="username_error" style="color:red"></div>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
		<div id="email_error" style="color:red"></div>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<input name="phone" class="form-control" placeholder="Phone number" type="text" required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
        <input name="address" class="form-control" placeholder="Address" type="text" required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
        <input name="date" class="form-control" placeholder="Date of Birth" type="date" required>
    </div> <!-- form-group// -->



    <div class="form-group input-group">
        <input name="password" class="form-control" id="regis_pass" placeholder="Create password" type="password" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <input class="form-control" placeholder="Repeat password" id="regis_confirm_pass" type="password" required>
		<div id="confirm_pass_err" style="color:red"></div>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="<?php echo home_url('/login')?>">Log In</a> </p>                                                                 
</form >
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
              
<?php get_footer(); ?>