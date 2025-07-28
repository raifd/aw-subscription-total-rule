<?php

defined( 'ABSPATH' ) || exit;

use AutomateWoo\Rules\Rule;

class AW_Subscription_Total_Rule extends Rule {

	public $type = 'number';
	public $data_item = 'subscription';

	public function init() {
		$this->title = __( 'Subscription – Subscription Total', 'aw-subscription-total-rule' );
		$this->group = __( 'Subscription', 'aw-subscription-total-rule' );

		$this->compare_types = [
			'equal'            => __( 'is equal to', 'aw-subscription-total-rule' ),
			'not_equal'        => __( 'is not equal to', 'aw-subscription-total-rule' ),
			'greater_than'     => __( 'is greater than', 'aw-subscription-total-rule' ),
			'less_than'        => __( 'is less than', 'aw-subscription-total-rule' ),
			'greater_or_equal' => __( 'is greater than or equal to', 'aw-subscription-total-rule' ),
			'less_or_equal'    => __( 'is less than or equal to', 'aw-subscription-total-rule' ),
		];
	}

	public function validate( $subscription, $compare, $value ) {
		if ( ! $subscription || '' === $value ) {
			return false;
		}

		$total = (float) $subscription->get_total();
		$value = (float) $value;

		switch ( $compare ) {
			case 'equal':
				return $total === $value;
			case 'not_equal':
				return $total !== $value;
			case 'greater_than':
				return $total > $value;
			case 'less_than':
				return $total < $value;
			case 'greater_or_equal':
				return $total >= $value;
			case 'less_or_equal':
				return $total <= $value;
			default:
				return false;
		}
	}
}

return new AW_Subscription_Total_Rule();
