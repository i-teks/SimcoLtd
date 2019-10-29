<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ $data['heading'] }}</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */

      /*All the styling goes here*/

      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
      }
      body {
        background-color: #e3e6e9;
        color: #2f2e2d;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }
      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
      }
      table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top;
      }
      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */
      .body {
        background-color: #2f2c2c;
        width: 100%;
      }
      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 600px;
        padding: 10px 20px;
        width: 600px;
      }
      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 600px;
        padding: 0;
      }
      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .header {
        padding-bottom: 10px;
        width: 100%;
      }
      .header-left {
        padding: 0;
        text-align: left;
      }
      .header-right {
        padding: 0 0 0 10px;
        width: 100%;
        text-align: right;
      }
      .header p {
        color: #eaeaea;
        margin-top: 0px;
        margin-bottom: 0px;
        font-size: 13px !important;
        line-height:16px;
      }
      .header a, .header a:hover, .header a:visited {
        text-decoration: none;
        color: #eaeaea;
      }
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%;
      }
      .wrapper {
        box-sizing: border-box;
        padding: 40px;
      }
      .content-block {
        padding-bottom: 20px;
        padding-top: 10px;
      }
      .accent-wrapper {
        margin: 0 auto 30px auto;
      }
      .accent {
        border-spacing: 0;
        margin: 0 auto;
        text-align: center;
        width: 100%;
      }
      .accent-bar {
        border-spacing: 0;
        border-bottom-color: #c51d27;
        border-bottom-width: 2px;
        border-bottom-style: solid;
        width: 80px;
      }
      .accent-blank {
        border-spacing: 0;
        width: 100%;
      }
      .accent-spacer {
        padding: 15px 0 0 0;
        width: 100%;
        text-align: left;
      }
      .accent-spacer p {
        margin-top: 0px;
        margin-bottom: 0px;
        line-height: 0px;
        font-size:4px;
      }
      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%;
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a,
        .footer a:hover,
        .footer a:visited {
          color: #656769;
          font-size: 12px;
          text-align: center;
      }
      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #6d6d6d;
        font-family: sans-serif;
        font-weight: 700;
        line-height: 1.2;
        margin: 0;
      }
      h1 {
        font-size: 32px;
      }
      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px;
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px;
      }
      a, a:hover, a:visited {
        color: #a71530;
        text-decoration: underline;
      }
      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto;
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center;
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize;
      }
      .btn-primary table td {
        background-color: #3498db;
      }
      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff;
      }
      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0;
      }
      .first {
        margin-top: 0;
      }
      .align-center {
        text-align: center;
      }
      .align-right {
        text-align: right;
      }
      .align-left {
        text-align: left;
      }
      .clear {
        clear: both;
      }
      .mt0 {
        margin-top: 0;
      }
      .mb0 {
        margin-bottom: 0;
      }
      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
      }
      .powered-by a {
        text-decoration: none;
      }
      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0;
      }
      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important;
        }
        /*
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important;
        }
        */
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 40px !important;
        }
        table[class=body] .content {
          padding: 10px 20px !important;
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important;
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important;
        }
        table[class=body] .btn table {
          width: 100% !important;
        }
        table[class=body] .btn a {
          width: 100% !important;
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important;
        }
      }
      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%;
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important;
        }
        .btn-primary table td:hover {
          background-color: #34495e !important;
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important;
        }
      }
    </style>
  </head>
  <body style="background-color:#2f2c2c;">
    <span class="preheader">{{ $data['heading'] }}</span>

    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="margin-bottom:30px;">
      <tr>
        <td class="container">
          <div class="content">

            <!-- START CENTERED HEADER AREA -->
            <table role="presentation" class="header">
              <tr>
                <!-- LOGO -->
                <td class="header-left"><a href="https://simcoltd.com"><img src="https://staging.simcoltd.com/assets/images/ui/simco-logo-reverse.png" height="40" alt="Simco Ltd"></a></td>
                <td>
                  <!-- COMPANY INFO -->
                  <table>
                    <tr><td class="header-right"><p class="customerinfo"><a href="tel:+1 (810) 245-0188"><strong>Phone: <nobr>+1 (810) 245-0188</nobr></strong></a></p></td></tr>
                    <tr><td class="header-right"><p class="customerinfo"><nobr>Email: <a href="mailto:mayres@simcoltd.com">mayres@simcoltd.com</a></nobr></p></td></tr>
                  </table>
                </td>
              </tr>
            </table>
            <!-- END HEADER AREA -->


            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">

                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <!-- EMAIL CONTENT HEADING -->
                    <tr><td><h1>A Contact Request Has Been Received.</h1></td></tr>
                    <tr>
                      <td>

                        <!-- START RED ACCENT BAR -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>

                              <div class="accent-wrapper">
                                <table class="accent">
                                  <tr>
                                    <td><table class="accent-bar"><tr><td class="accent-spacer"><p>&nbsp;</p></td></tr></table></td>
                                    <td><table class="accent-blank"><tr><td class="accent-spacer"><p>&nbsp;</p></td></tr></table></td>
                                  </tr>
                                </table>
                              </div>

                            </td>
                          </tr>
                        </table>
                        <!-- END RED ACCENT BAR -->

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- ADDRESSEE -->
                        <p><strong>Attention: Simco Ltd,</strong></p>

                        <!-- MESSAGE BODY -->
                        <p>A visitor on our site has submitted a contact request form at our website. Please review the message contents and reply to the customer within 2-3 business days of this email receipt.</p>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- FORM RESULTS -->
                        <br>
                        <p><strong>Contact Details</strong></p>
                        <p>First name: {{ $data['first_name'] }}</p>
                        <p>Last name: {{ $data['last_name'] }}</p>
                        <p>Email: {{ $data['email'] }}</p>
                        <p>Contact number: {{ $data['contact_number'] }}</p>
                        <br>
                        <p><strong>Company Info</strong></p>
                        <p>Company: {{ $data['company]'] }}</p>
                        <p>Department: {{ $data['department'] }}</p>
                        <p>Position: {{ $data['position'] }}</p>
                        <br>
                        <p><strong>Message</strong></p>
                        <p>Interest: {{ $data['interest'] }}</p>
                        <p>Heard about Simco Ltd from: {{ $data['heard_about'] }}</p>
                        <p>Message: {{ $data['text_message'] }}</p>

                      </td>
                    </tr>
                  </table>

                </td>
              </tr>
            <!-- END MAIN CONTENT AREA -->

            </table>
            <!-- END CENTERED WHITE CONTAINER -->


          </div>
        </td>
      </tr>
    </table>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="background-color:#000">
      <tr>
        <td class="container">
          <div class="content">


            <!-- START FOOTER -->
            <div class="footer" style="background-color:#000">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <!-- COPYRIGHT -->
                <tr>
                  <td class="content-block">
                    Copyright &copy; 2019 Simco Ltd, 1 DeMille Rd, Lapeer, MI 48446 USA. All right reserved.
                  </td>
                </tr>
                <tr>
                  <td class="content-block">
                    <a href="https://simcoltd.com"><img src="https://staging.simcoltd.com/assets/images/ui/simco-logo-reverse.png" height="30" alt="Igniser"></a>
                  </td>
                </tr>
                <tr>
                  <td class="content-block" style="text-align:left;">
                    Please do not reply to this email. Emails sent to this address will not be answered.
                    This is an automated message sent from the <a href="https://simcoltd.com" style="text-decoration:none;">www.simcoltd.com</a> website.
                    If you have any comments or questions regarding this email correspondence please contact us at <a href="mailto:mayres@simcoltd.com" style="text-decoration:none;">mayres@simcoltd.com</a>.
                  </td>
                </tr>
                <!-- MESSAGE ID -->
                <tr>
                  <td class="content-block" style="text-align:right;">
                    {{ $data['timestamp'] }}
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->


          </div>
        </td>
      </tr>
    </table>

  </body>
</html>
