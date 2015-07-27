#!/usr/bin/perl

use CGI::Carp qw(fatalsToBrowser);
use MIME::Base64;

require './config_kamei.cgi';
require './librarys/core.cgi';
require "./configs/$config{'lang'}.cgi";

&_GET;
&_MAIN;
exit;