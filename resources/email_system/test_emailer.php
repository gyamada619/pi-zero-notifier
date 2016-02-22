<?php
require '../vendor/autoload.php';
require_once '../config/MysqliDb.php';


function sendMail($to,$stock){
    $sendgrid = new SendGrid('****');
    $email = new SendGrid\Email();
    $email
        ->addTo($to)
        ->setFrom('****')
        ->setSubject('Pi Zero Is In Stock!')
        //->setText('There are '.$stock.' pi zeros in stock at '.date("D M j G:i:s T Y").' https://www.adafruit.com/products/2885.')
        ->setHtml('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
.font-sans-serif {
  font-family: sans-serif;
}
.font-avenir {
  font-family: Avenir, sans-serif;
}
.mso .wrapper .font-avenir {
  font-family: sans-serif !important;
}
.font-lato {
  font-family: Lato, Tahoma, sans-serif;
}
.mso .wrapper .font-lato {
  font-family: Tahoma, sans-serif !important;
}
.font-cabin {
  font-family: Cabin, Avenir, sans-serif;
}
.mso .wrapper .font-cabin {
  font-family: sans-serif !important;
}
.font-open-Sans {
  font-family: "Open Sans", sans-serif;
}
.mso .wrapper .font-open-Sans {
  font-family: sans-serif !important;
}
.font-roboto {
  font-family: Roboto, Tahoma, sans-serif;
}
.mso .wrapper .font-roboto {
  font-family: Tahoma, sans-serif !important;
}
.font-ubuntu {
  font-family: Ubuntu, sans-serif;
}
.mso .wrapper .font-ubuntu {
  font-family: sans-serif !important;
}
.font-pt-sans {
  font-family: "PT Sans", "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pt-sans {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-georgia {
  font-family: Georgia, serif;
}
.font-merriweather {
  font-family: Merriweather, Georgia, serif;
}
.mso .wrapper .font-merriweather {
  font-family: Georgia, serif !important;
}
.font-bitter {
  font-family: Bitter, Georgia, serif;
}
.mso .wrapper .font-bitter {
  font-family: Georgia, serif !important;
}
.font-pt-serif {
  font-family: "PT Serif", Georgia, serif;
}
.mso .wrapper .font-pt-serif {
  font-family: Georgia, serif !important;
}
.font-pompiere {
  font-family: Pompiere, "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pompiere {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-roboto-slab {
  font-family: "Roboto Slab", Georgia, serif;
}
.mso .wrapper .font-roboto-slab {
  font-family: Georgia, serif !important;
}
@media only screen and (max-width: 620px) {
  .wrapper .column .size-8 {
    font-size: 8px !important;
    line-height: 14px !important;
  }
  .wrapper .column .size-9 {
    font-size: 9px !important;
    line-height: 16px !important;
  }
  .wrapper .column .size-10 {
    font-size: 10px !important;
    line-height: 18px !important;
  }
  .wrapper .column .size-11 {
    font-size: 11px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-12 {
    font-size: 12px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-13 {
    font-size: 13px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-14 {
    font-size: 14px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-15 {
    font-size: 15px !important;
    line-height: 23px !important;
  }
  .wrapper .column .size-16 {
    font-size: 16px !important;
    line-height: 24px !important;
  }
  .wrapper .column .size-17 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-18 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-20 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-22 {
    font-size: 18px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-24 {
    font-size: 20px !important;
    line-height: 28px !important;
  }
  .wrapper .column .size-26 {
    font-size: 22px !important;
    line-height: 31px !important;
  }
  .wrapper .column .size-28 {
    font-size: 24px !important;
    line-height: 32px !important;
  }
  .wrapper .column .size-30 {
    font-size: 26px !important;
    line-height: 34px !important;
  }
  .wrapper .column .size-32 {
    font-size: 28px !important;
    line-height: 36px !important;
  }
  .wrapper .column .size-34 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-36 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-40 {
    font-size: 32px !important;
    line-height: 40px !important;
  }
  .wrapper .column .size-44 {
    font-size: 34px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-48 {
    font-size: 36px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-56 {
    font-size: 40px !important;
    line-height: 47px !important;
  }
  .wrapper .column .size-64 {
    font-size: 44px !important;
    line-height: 50px !important;
  }
}
body {
  margin: 0;
  padding: 0;
  min-width: 100%;
}
.mso body {
  mso-line-height-rule: exactly;
}
.no-padding .wrapper .column .column-top,
.no-padding .wrapper .column .column-bottom {
  font-size: 0px;
  line-height: 0px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td {
  padding: 0;
  vertical-align: top;
}
.spacer,
.border {
  font-size: 1px;
  line-height: 1px;
}
.spacer {
  width: 100%;
}
img {
  border: 0;
  -ms-interpolation-mode: bicubic;
}
.image {
  font-size: 12px;
  mso-line-height-rule: at-least;
}
.image img {
  display: block;
}
.logo {
  mso-line-height-rule: at-least;
}
.logo img {
  display: block;
}
strong {
  font-weight: bold;
}
h1,
h2,
h3,
p,
ol,
ul,
blockquote,
.image {
  font-style: normal;
  font-weight: 400;
}
ol,
ul,
li {
  padding-left: 0;
}
blockquote {
  Margin-left: 0;
  Margin-right: 0;
  padding-right: 0;
}
.column-top,
.column-bottom {
  font-size: 32px;
  line-height: 32px;
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 150ms;
  transition-property: all;
}
.half-padding .column .column-top,
.half-padding .column .column-bottom {
  font-size: 16px;
  line-height: 16px;
}
.column {
  text-align: left;
}
.contents {
  table-layout: fixed;
  width: 100%;
}
.padded {
  padding-left: 32px;
  padding-right: 32px;
  word-break: break-word;
  word-wrap: break-word;
}
.wrapper {
  display: table;
  table-layout: fixed;
  width: 100%;
  min-width: 620px;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
.wrapper a {
  transition: opacity 0.2s ease-in;
}
table.wrapper {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
  width: 600px;
}
.centered {
  Margin-left: auto;
  Margin-right: auto;
}
.btn a {
  border-radius: 3px;
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  line-height: 24px;
  padding: 13px 35px 12px 35px;
  text-align: center;
  text-decoration: none !important;
}
.btn a:hover {
  opacity: 0.8;
}
.two-col .btn a {
  font-size: 12px;
  line-height: 22px;
  padding: 10px 28px;
}
.three-col .btn a {
  font-size: 11px;
  line-height: 19px;
  padding: 6px 18px 5px 18px;
}
@media only screen and (max-width: 620px) {
  .btn a {
    display: block !important;
    font-size: 14px !important;
    line-height: 24px !important;
    padding: 13px 10px 12px 10px !important;
  }
}
.two-col .column {
  width: 300px;
}
.three-col .column {
  width: 200px;
}
.three-col .first .padded {
  padding-left: 32px;
  padding-right: 16px;
}
.three-col .second .padded {
  padding-left: 24px;
  padding-right: 24px;
}
.three-col .third .padded {
  padding-left: 16px;
  padding-right: 32px;
}
@media only screen and (min-width: 0) {
  .wrapper {
    text-rendering: optimizeLegibility;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] {
    min-width: 318px !important;
    width: 100% !important;
  }
  [class=wrapper] .one-col,
  [class=wrapper] .two-col,
  [class=wrapper] .three-col {
    width: 318px !important;
  }
  [class=wrapper] .column,
  [class=wrapper] .gutter {
    display: block;
    float: left;
    width: 318px !important;
  }
  [class=wrapper] .padded {
    padding-left: 32px !important;
    padding-right: 32px !important;
  }
  [class=wrapper] .block {
    display: block !important;
  }
  [class=wrapper] .hide {
    display: none !important;
  }
  [class=wrapper] .image img {
    height: auto !important;
    width: 100% !important;
  }
}
.footer {
  width: 100%;
}
.footer .inner {
  padding: 58px 0 29px 0;
  width: 600px;
}
.footer .left td,
.footer .right td {
  font-size: 12px;
  line-height: 22px;
}
.footer .left td {
  text-align: left;
  width: 400px;
}
.footer .right td {
  max-width: 200px;
  mso-line-height-rule: at-least;
}
.footer .links {
  line-height: 26px;
  Margin-bottom: 26px;
  mso-line-height-rule: at-least;
}
.footer .links a:hover {
  opacity: 0.8;
}
.footer .links img {
  vertical-align: middle;
}
.footer .address {
  Margin-bottom: 18px;
}
.footer .campaign {
  Margin-bottom: 18px;
}
.footer .campaign a {
  font-weight: bold;
  text-decoration: none;
}
.footer .sharing div {
  Margin-bottom: 5px;
}
.wrapper .footer .fblike,
.wrapper .footer .tweet,
.wrapper .footer .linkedinshare,
.wrapper .footer .forwardtoafriend {
  background-repeat: no-repeat;
  background-size: 200px 56px;
  border-radius: 2px;
  color: #ffffff;
  display: block;
  font-size: 11px;
  font-weight: bold;
  line-height: 11px;
  padding: 8px 11px 7px 28px;
  text-align: left;
  text-decoration: none;
}
.wrapper .footer .fblike:hover,
.wrapper .footer .tweet:hover,
.wrapper .footer .linkedinshare:hover,
.wrapper .footer .forwardtoafriend:hover {
  color: #ffffff !important;
  opacity: 0.8;
}
.footer .fblike {
  background-image: url(https://i3.createsend1.com/static/eb/master/01-mason/imgf/fblike.png);
}
.footer .tweet {
  background-image: url(https://i5.createsend1.com/static/eb/master/01-mason/imgf/tweet.png);
}
.footer .linkedinshare {
  background-image: url(https://i4.createsend1.com/static/eb/master/01-mason/imgf/lishare.png);
}
.footer .forwardtoafriend {
  background-image: url(https://i6.createsend1.com/static/eb/master/01-mason/imgf/forward.png);
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
  .footer .fblike {
    background-image: url(https://i7.createsend1.com/static/eb/master/01-mason/imgf/fblike@2x.png) !important;
  }
  .footer .tweet {
    background-image: url(https://i10.createsend1.com/static/eb/master/01-mason/imgf/tweet@2x.png) !important;
  }
  .footer .linkedinshare {
    background-image: url(https://i8.createsend1.com/static/eb/master/01-mason/imgf/lishare@2x.png) !important;
  }
  .footer .forwardtoafriend {
    background-image: url(https://i9.createsend1.com/static/eb/master/01-mason/imgf/forward@2x.png) !important;
  }
}
@media only screen and (max-width: 620px) {
  .footer {
    width: 318px !important;
  }
  .footer td {
    display: none;
  }
  .footer .inner,
  .footer .inner td {
    display: block;
    text-align: center !important;
    max-width: 318px !important;
    width: 318px !important;
  }
  .footer .sharing {
    Margin-bottom: 40px;
  }
  .footer .sharing div {
    display: inline-block;
  }
  .footer .fblike,
  .footer .tweet,
  .footer .linkedinshare,
  .footer .forwardtoafriend {
    display: inline-block !important;
  }
}
.wrapper h1,
.wrapper h2,
.wrapper h3,
.wrapper p,
.wrapper ol,
.wrapper ul,
.wrapper li,
.wrapper blockquote,
.image,
.btn,
.divider {
  Margin-bottom: 0;
  Margin-top: 0;
}
.wrapper .column h1 + * {
  Margin-top: 18px;
}
.wrapper .column h2 + * {
  Margin-top: 20px;
}
.wrapper .column h3 + * {
  Margin-top: 16px;
}
.wrapper .column p + *,
.wrapper .column ol + *,
.wrapper .column ul + *,
.wrapper .column blockquote + *,
.image + .contents td > :first-child {
  Margin-top: 24px;
}
.contents:nth-last-child(n+3) h1:last-child,
.no-padding .contents:nth-last-child(n+2) h1:last-child {
  Margin-bottom: 18px;
}
.contents:nth-last-child(n+3) h2:last-child,
.no-padding .contents:nth-last-child(n+2) h2:last-child {
  Margin-bottom: 20px;
}
.contents:nth-last-child(n+3) h3:last-child,
.no-padding .contents:nth-last-child(n+2) h3:last-child {
  Margin-bottom: 16px;
}
.contents:nth-last-child(n+3) p:last-child,
.no-padding .contents:nth-last-child(n+2) p:last-child,
.contents:nth-last-child(n+3) ol:last-child,
.no-padding .contents:nth-last-child(n+2) ol:last-child,
.contents:nth-last-child(n+3) ul:last-child,
.no-padding .contents:nth-last-child(n+2) ul:last-child,
.contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .contents:nth-last-child(n+2) blockquote:last-child,
.contents:nth-last-child(n+3) .image,
.no-padding .contents:nth-last-child(n+2) .image,
.contents:nth-last-child(n+3) .divider,
.no-padding .contents:nth-last-child(n+2) .divider,
.contents:nth-last-child(n+3) .btn,
.no-padding .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 24px;
}
.two-col .column p + *,
.two-col .column ol + *,
.two-col .column ul + *,
.two-col .column blockquote + *,
.two-col .image + .contents td > :first-child {
  Margin-top: 23px;
}
.two-col .contents:nth-last-child(n+3) p:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) p:last-child,
.two-col .contents:nth-last-child(n+3) ol:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ol:last-child,
.two-col .contents:nth-last-child(n+3) ul:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ul:last-child,
.two-col .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) blockquote:last-child,
.two-col .contents:nth-last-child(n+3) .image,
.no-padding .two-col .contents:nth-last-child(n+2) .image,
.two-col .contents:nth-last-child(n+3) .divider,
.no-padding .two-col .contents:nth-last-child(n+2) .divider,
.two-col .contents:nth-last-child(n+3) .btn,
.no-padding .two-col .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 23px;
}
.three-col .column p + *,
.three-col .column ol + *,
.three-col .column ul + *,
.three-col .column blockquote + *,
.three-col .image + .contents td > :first-child {
  Margin-top: 21px;
}
.three-col .contents:nth-last-child(n+3) p:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) p:last-child,
.three-col .contents:nth-last-child(n+3) ol:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ol:last-child,
.three-col .contents:nth-last-child(n+3) ul:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ul:last-child,
.three-col .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) blockquote:last-child,
.three-col .contents:nth-last-child(n+3) .image,
.no-padding .three-col .contents:nth-last-child(n+2) .image,
.three-col .contents:nth-last-child(n+3) .divider,
.no-padding .three-col .contents:nth-last-child(n+2) .divider,
.three-col .contents:nth-last-child(n+3) .btn,
.no-padding .three-col .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 21px;
}
@media only screen and (max-width: 620px) {
  .wrapper p + *,
  .wrapper ol + *,
  .wrapper ul + *,
  .wrapper blockquote + *,
  .image + .contents td > :first-child {
    Margin-top: 24px !important;
  }
  .contents:nth-last-child(n+3) p:last-child,
  .no-padding .contents:nth-last-child(n+2) p:last-child,
  .contents:nth-last-child(n+3) ol:last-child,
  .no-padding .contents:nth-last-child(n+2) ol:last-child,
  .contents:nth-last-child(n+3) ul:last-child,
  .no-padding .contents:nth-last-child(n+2) ul:last-child,
  .contents:nth-last-child(n+3) blockquote:last-child,
  .no-padding .contents:nth-last-child(n+2) blockquote:last-child,
  .contents:nth-last-child(n+3) .image:last-child,
  .no-padding .contents:nth-last-child(n+2) .image:last-child,
  .contents:nth-last-child(n+3) .divider:last-child,
  .no-padding .contents:nth-last-child(n+2) .divider:last-child,
  .contents:nth-last-child(n+3) .btn:last-child,
  .no-padding .contents:nth-last-child(n+2) .btn:last-child {
    Margin-bottom: 24px !important;
  }
}
td.border {
  width: 1px;
}
tr.border {
  background-color: #e9e9e9;
  height: 1px;
}
tr.border td {
  line-height: 1px;
}
.one-col,
.two-col,
.three-col,
.one-col-feature {
  background-color: #ffffff;
  font-size: 14px;
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col,
.one-col-feature,
.preheader,
.header {
  Margin-left: auto;
  Margin-right: auto;
}
.preheader table {
  width: 602px;
}
.preheader .title,
.preheader .webversion {
  padding-top: 10px;
  padding-bottom: 12px;
  font-size: 12px;
  line-height: 21px;
}
.preheader .title {
  text-align: left;
}
.preheader .webversion {
  text-align: right;
  width: 300px;
}
.header {
  width: 602px;
}
.header .logo div {
  font-weight: 700;
  letter-spacing: -0.02em;
}
.header .logo div.logo-center {
  text-align: center;
}
.header .logo div.logo-center img {
  Margin-left: auto;
  Margin-right: auto;
}
.gmail {
  width: 650px;
  min-width: 650px;
}
.gmail td {
  font-size: 1px;
  line-height: 1px;
}
.wrapper h1 {
  font-size: 36px;
  line-height: 44px;
}
.wrapper h2 {
  font-size: 26px;
  line-height: 32px;
}
.wrapper h3 {
  font-size: 18px;
  line-height: 22px;
}
.wrapper h1 a,
.wrapper h2 a,
.wrapper h3 a {
  text-decoration: none;
}
.wrapper p,
.wrapper ol,
.wrapper ul {
  line-height: 24px;
}
.one-col blockquote,
.two-col blockquote,
.three-col blockquote {
  font-size: 14px;
  border-left: 2px solid #e9e9e9;
  padding-left: 16px;
}
.divider {
  background-color: #e9e9e9;
  font-size: 2px;
  line-height: 2px;
  Margin-left: auto;
  Margin-right: auto;
  width: 60px;
}
.mso .divider {
  Margin-left: 238px !important;
  Margin-right: 238px !important;
}
.mso .two-col .divider {
  Margin-left: 120px !important;
  Margin-right: 120px !important;
}
.mso .three-col .divider {
  Margin-left: 70px !important;
  Margin-right: 70px !important;
}
.padded .image {
  font-size: 0;
}
.image-frame {
  border-style: solid;
  border-width: 8px;
  display: inline-block;
  font-size: 12px;
}
.one-col p,
.one-col ol,
.one-col ul {
  font-size: 16px;
  line-height: 24px;
}
.one-col ol,
.one-col ul {
  Margin-left: 18px;
}
.two-col .image-frame {
  border-width: 6px;
}
.two-col ol,
.two-col ul {
  Margin-left: 16px;
}
.two-col li {
  padding-left: 5px;
}
.two-col blockquote {
  padding-left: 16px;
}
.three-col .image-frame {
  border-width: 4px;
}
.three-col ol,
.three-col ul {
  Margin-left: 14px;
}
.three-col li {
  padding-left: 6px;
}
.three-col blockquote {
  padding-left: 16px;
}
.one-col-feature {
  width: 600px;
}
@media only screen and (max-width: 620px) {
  .one-col-feature {
    width: 318px !important;
  }
}
.one-col-feature .column-top,
.one-col-feature .column-bottom {
  font-size: 36px;
  line-height: 36px;
}
.half-padding .one-col-feature .column-top,
.half-padding .one-col-feature .column-bottom {
  font-size: 18px;
  line-height: 18px;
}
.one-col-feature .column {
  text-align: center;
  width: 600px;
}
.one-col-feature h1,
.one-col-feature h2,
.one-col-feature h3,
.one-col-feature p {
  text-align: center;
}
.one-col-feature ol,
.one-col-feature ul {
  Margin-left: 40px;
  text-align: left;
}
.one-col-feature li {
  padding-left: 3px;
}
.one-col-feature .btn {
  text-align: center;
}
.one-col-feature blockquote {
  border-bottom: 2px solid #e9e9e9;
  border-left-color: #ffffff;
  border-left-width: 0;
  border-left-style: none;
  border-top: 2px solid #e9e9e9;
  padding-bottom: 42px;
  padding-left: 0;
  padding-top: 42px;
}
.wrapper .one-col-feature blockquote p,
.wrapper .one-col-feature blockquote ol,
.wrapper .one-col-feature blockquote ul {
  font-size: 42px;
  line-height: 48px;
}
.wrapper h1 {
  font-weight: 700;
}
.wrapper h2 {
  font-style: italic;
  font-weight: normal;
}
.wrapper h3 {
  font-weight: normal;
}
.wrapper blockquote {
  font-style: italic;
}
.wrapper .one-col-feature h1 {
  font-weight: normal;
}
.wrapper .one-col-feature h2 {
  font-style: normal;
  font-weight: bold;
}
.wrapper .one-col-feature h3 {
  font-style: italic;
}
.preheader a,
.header a {
  font-weight: bold;
  text-decoration: none;
}
@media only screen and (max-width: 651px) {
  .gmail {
    display: none !important;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] .address,
  [class=wrapper] .subscription {
    display: block;
    float: left;
    text-align: center !important;
    width: 100% !important;
  }
  [class=wrapper] .address {
    padding-bottom: 0 !important;
  }
  [class=wrapper] .subscription {
    padding-top: 0 !important;
  }
  [class=wrapper] h1 {
    font-size: 36px !important;
    line-height: 42px !important;
  }
  [class=wrapper] h2 {
    font-size: 26px !important;
    line-height: 32px !important;
  }
  [class=wrapper] h3 {
    font-size: 18px !important;
    line-height: 22px !important;
  }
  [class=wrapper] p,
  [class=wrapper] ol,
  [class=wrapper] ul {
    font-size: 16px !important;
    line-height: 24px !important;
  }
  [class=wrapper] ol,
  [class=wrapper] ul {
    Margin-left: 18px !important;
  }
  [class=wrapper] li {
    padding-left: 2px !important;
  }
  [class=wrapper] blockquote {
    padding-left: 16px !important;
  }
  [class=wrapper] .two-col .column:nth-child(n + 3) {
    border-top: 1px solid #e9e9e9;
  }
  [class=wrapper] .second .column-top,
  [class=wrapper] .third .column-top {
    display: none;
  }
  [class=wrapper] .image-frame {
    border-width: 4px !important;
  }
  [class=wrapper] .header .logo {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
  [class=wrapper] .header .logo div img {
    display: inline-block !important;
    max-width: 280px !important;
    height: auto !important;
  }
  [class=wrapper] table.border,
  [class=wrapper] .header,
  [class=wrapper] .webversion {
    width: 320px !important;
  }
  [class=wrapper] .preheader .webversion,
  [class=wrapper] .header .logo a {
    text-align: center !important;
  }
  [class=wrapper] .preheader table,
  [class=wrapper] .border td {
    width: 318px !important;
  }
  [class=wrapper] .border td.border {
    width: 1px !important;
  }
  [class=wrapper] .image .border td {
    width: auto !important;
  }
  [class=wrapper] .title {
    display: none;
  }
  [class=wrapper] .one-col-feature blockquote {
    font-size: 18px !important;
    line-height: 26px !important;
    padding-bottom: 26px !important;
    padding-left: 0 !important;
    padding-top: 26px !important;
  }
  [class=wrapper] .one-col-feature blockquote p,
  [class=wrapper] .one-col-feature blockquote ol,
  [class=wrapper] .one-col-feature blockquote ul {
    font-size: 26px !important;
    line-height: 32px !important;
  }
}
@media only screen and (max-width: 320px) {
  [class=wrapper] td.border {
    display: none;
  }
  [class=wrapper] table.border,
  [class=wrapper] .header,
  [class=wrapper] .webversion {
    width: 318px !important;
  }
}
</style>
  <!--[if !mso]><!--><style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400);
</style><link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400" rel="stylesheet" type="text/css" /><!--<![endif]--><style type="text/css">
.wrapper h1{}.wrapper h1{font-family:"Open Sans",sans-serif}.mso .wrapper h1{font-family:sans-serif !important}.wrapper h2{}.wrapper h2{font-family:"Open Sans",sans-serif}.mso .wrapper h2{font-family:sans-serif !important}.wrapper h3{}.wrapper h3{font-family:"Open Sans",sans-serif}.mso .wrapper h3{font-family:sans-serif !important}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{font-family:"Open Sans",sans-serif}.mso .wrapper p,.mso .wrapper ol,.mso .wrapper ul,.mso .wrapper .image{font-family:sans-serif !important}.wrapper .btn a{}.wrapper .btn a{font-family:"Open Sans",sans-serif}.mso .wrapper .btn a{font-family:sans-serif !important}.logo div{}.logo div{font-family:Avenir,sans-serif}.mso .logo div{font-family:sans-serif 
!important}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{font-family:"Open Sans",sans-serif}.mso .title,.mso .webversion,.mso .fblike,.mso .tweet,.mso .linkedinshare,.mso .forwardtoafriend,.mso .link,.mso .address,.mso .permission,.mso .campaign{font-family:sans-serif !important}body,.wrapper,.emb-editor-canvas{background-color:#fbfbfb}.border{background-color:#e9e9e9}.wrapper h1{color:#565656}.wrapper h2{color:#555}.wrapper h3{color:#555}.wrapper p,.wrapper ol,.wrapper ul{color:#565656}.wrapper .image{color:#565656}.wrapper a{color:#41637e}.wrapper a:hover{color:#30495c !important}.wrapper .one-col-feature p a:hover,.wrapper .one-col-feature ol a:hover,.wrapper .one-col-feature ul a:hover{color:#30495c !important}.wrapper 
.btn a{background-color:#41637e;color:#fff}.wrapper .btn a:hover{color:#fff !important}.logo div{color:#41637e}.logo div a{color:#41637e}.logo div a:hover{color:#41637e !important}.title,.webversion,.footer .inner td{color:#999}.wrapper .title a,.wrapper .webversion a,.wrapper .footer a{color:#999}.wrapper .title a:hover,.wrapper .webversion a:hover,.wrapper .footer a:hover{color:#737373 !important}.image-frame{background-color:#f7f7f7;border-color:#dadada}.wrapper .footer .fblike,.wrapper .footer .tweet,.wrapper .footer .linkedinshare,.wrapper .footer .forwardtoafriend{background-color:#7e7e7e}
</style><meta name="robots" content="noindex,nofollow" />
<meta property="og:title" content="My First Campaign" />
</head>
<!--[if mso]>
  <body class="mso">
<![endif]-->
<!--[if !mso]><!-->
  <body class="full-padding" style="margin: 0;padding: 0;min-width: 100%;background-color: #fbfbfb;">
<!--<![endif]-->
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #fbfbfb;">
      <table class="gmail" style="border-collapse: collapse;border-spacing: 0;width: 650px;min-width: 650px;"><tbody><tr><td style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;">&nbsp;</td></tr></tbody></table>
      <table class="preheader centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">
            <table style="border-collapse: collapse;border-spacing: 0;width: 602px;">
              <tbody><tr>
                <td class="title" style=\'padding: 0;vertical-align: top;font-family: "Open Sans",sans-serif;color: #999;padding-top: 10px;padding-bottom: 12px;font-size: 12px;line-height: 21px;text-align: left;\'>
                  &nbsp;
                </td>
                <td class="webversion" style=\'padding: 0;vertical-align: top;font-family: "Open Sans",sans-serif;color: #999;padding-top: 10px;padding-bottom: 12px;font-size: 12px;line-height: 21px;text-align: right;width: 300px;\'>
                  
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>
      
      
          <table class="centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;">
            <tbody><tr>
              <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px;">&#8203;</td>
              <td style="padding: 0;vertical-align: top;">
                <table class="one-col" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;background-color: #307fb0;font-size: 14px;table-layout: fixed;background-position: 0px 0px;background-image: url(https://i1.createsend1.com/ei/i/7D/03A/792/073132/csfinal/Pi_Zero_v1.2.png);background-repeat: repeat;">
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left;">
                      <div><div class="column-top" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div></div>
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            <h1 class="size-34" style=\'font-style: normal;font-weight: 700;Margin-bottom: 18px;Margin-top: 0;font-size: 34px;line-height: 43px;font-family: "Open Sans",sans-serif;color: #565656;text-align: left;\'><span style="color:#3a4147"><strong style="font-weight: bold;">It\'s in stock!</strong></span></h1>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            <div style="line-height:68px;font-size:1px">&nbsp;</div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            <div style="line-height:20px;font-size:1px">&nbsp;</div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            <div style="line-height:15px;font-size:1px">&nbsp;</div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                      <div class="column-bottom" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div>
                    </td>
                  </tr>
                </tbody></table>
              </td>
              <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px;">&#8203;</td>
            </tr>
          </tbody></table>
        
          <table class="centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;">
            <tbody><tr>
              <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px;">&#8203;</td>
              <td style="padding: 0;vertical-align: top;">
                <table class="one-col" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed;" emb-background-style>
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left;">
                      <div><div class="column-top" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div></div>
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            <div class="btn" style="Margin-bottom: 24px;Margin-top: 0;text-align: left;">
              <![if !mso]><a style=\'border-radius: 4px;display: inline-block;font-size: 14px;font-weight: 700;line-height: 24px;padding: 13px 35px 12px 35px;text-align: center;text-decoration: none !important;transition: opacity 0.2s ease-in;color: #fff;font-family: "Open Sans",sans-serif;background-color: #1c83c7; color: #fbfbfb; font-family: &#39;Open Sans&#39;, sans-serif !important;\' href="https://www.adafruit.com/products/2885" data-width="106">Buy the Pi Zero</a><![endif]>
            <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" href="https://www.adafruit.com/products/2885" style="width:176px" arcsize="9%" fillcolor="#1C83C7" stroke="f"><v:textbox style="mso-fit-shape-to-text:t" inset="0px,12px,0px,11px"><center style="font-size:14px;line-height:24px;color:#FBFBFB;font-weight:700;mso-line-height-rule:exactly;mso-text-raise:4px">Buy the Pi Zero</center></v:textbox></v:roundrect><![endif]--></div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            <div style="line-height:10px;font-size:1px">&nbsp;</div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                      <div class="column-bottom" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div>
                    </td>
                  </tr>
                </tbody></table>
              </td>
              <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px;">&#8203;</td>
            </tr>
          </tbody></table>
        
      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
          <td class="inner" style="padding: 58px 0 29px 0;vertical-align: top;width: 600px;">
            <table class="right" style="border-collapse: collapse;border-spacing: 0;" align="right">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #999;font-size: 12px;line-height: 22px;max-width: 200px;mso-line-height-rule: at-least;">
                  <div class="sharing">
                    
                    
                    
                    <div style="Margin-bottom: 5px;">
                      
                    </div>
                  </div>
                </td>
              </tr>
            </tbody></table>
            <table class="left" style="border-collapse: collapse;border-spacing: 0;" align="left">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #999;font-size: 12px;line-height: 22px;text-align: left;width: 400px;">
                  
                  <div class="address" style=\'font-family: "Open Sans",sans-serif;Margin-bottom: 18px;\'>
                    <div>Starbuckstech.com sent this email.</div>
                  </div>
                  <div class="permission" style=\'font-family: "Open Sans",sans-serif;\'>
                    <div>You\'re getting this because you wanted to know about Pi Zero stock.&nbsp;<br />
Don\'t want to anymore?</div>
                  </div>
                  <div class="campaign" style=\'font-family: "Open Sans",sans-serif;Margin-bottom: 18px;\'>
                    
                    <a href="https://pizero.starbuckstech.com/views/unsubscribe.php?email='.$to.'">Unsubscribe</unsubscribe>
                  </div>
                </td>
              </tr>
            </tbody></table>
          </td>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
        </tr>
      </tbody></table>
    </center>
  
</body></html>
');

    // $sendgrid->send($email);

    // OR catch the error

    try {
        $sendgrid->send($email);
    } catch(\SendGrid\Exception $e) {
        echo $e->getCode();
        foreach($e->getErrors() as $er) {
            echo $er;
        }
    }
}
sleep(10);
$mysqli = new mysqli ('localhost', '****', '****', '****');
$db = new MysqliDb ($mysqli);
$cols = Array ("stock");
$db->orderBy("time","desc");
$adafruit_stock = $db->get("adafruitstock",1,$cols)[0]['stock']; //contains an Array of all users 
if ($adafruit_stock >= 0) {
	//send users an email once per day
	$cols = Array ("email,last_email_sent");
	$users_array = $db->get("users",null,$cols); //contains an Array of all users 
	$test_email = '****';
	sendMail($test_email,$adafruit_stock);
	$i=0;
	// foreach ($users_array as $key => $value) {

	// 	if(time()-strtotime($value['last_email_sent']) > 24*60*60 ){
	// 		sendMail($value['email'],$adafruit_stock);
	// 		$i++;
	// 		echo $value['email'] . "\n";
	// 		$data = Array (
	// 		    'last_email_sent' => date("Y-m-d H:i:s"),
	// 		    'email' => $value['email']
	// 		);
	// 		$db->where ('email', $value['email']);
	// 		if ($db->update ('users', $data)) //on success, we do nothing. on failure, log the error.
	// 		    $d=0;
	// 		else echo 'update failed: ' . $db->getLastError();

	// 	}
	// }
	if($i==1)
		echo $i . " email sent.\n";
	else echo $i . " emails sent.\n";
}

?>