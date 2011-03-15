<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'alpha'         => ':field must contain only letters',
	'alpha_dash'    => ':field must contain only numbers, letters and dashes',
	'alpha_numeric' => ':field must contain only letters and numbers',
	'color'         => ':field must be a color',
	'credit_card'   => ':field must be a credit card number',
	'date'          => ':field must be a date',
	'decimal'       => ':field must be a decimal with :param1 places',
	'digit'         => ':field must be a digit',
	'email'         => ':field must be a email address',
	'email_domain'  => ':field must contain a valid email domain',
	'equals'        => ':field must equal :param1',
	'exact_length'  => ':field must be exactly :param1 characters long',
	'in_array'      => ':field must be one of the available options',
	'ip'            => ':field must be an ip address',
	'matches'       => ':field must be the same as :param1',
	'min_length'    => ':field must be at least :param1 characters long',
	'max_length'    => ':field must not exceed :param2 characters long',
	'not_empty'     => ':field must not be empty',
	'numeric'       => ':field must be numeric',
	'phone'         => ':field must be a phone number',
	'range'         => ':field must be within the range of :param1 to :param2',
	'regex'         => ':field does not match the required format',
	'url'           => ':field must be a url',
);