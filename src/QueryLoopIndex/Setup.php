<?php

namespace PHPPress\BricksyBits\QueryLoopIndex;

use Bricks\Query as BricksQuery;

class Setup {

	public static function init(): void {

		add_filter( 'bricks/conditions/options', [ self::class, 'append_query_loop_index_option' ] );

		add_filter( 'bricks/conditions/result', [ self::class, 'check_query_loop_index_condition' ], 20, 3 );
	}

	public static function append_query_loop_index_option( array $options ): array {

		$options[] = [
			'key'     => 'loop_index',
			'group'   => 'other',
			'label'   => esc_html__( 'Query Loop Index', 'bricksy-bits' ),
			'compare' => [
				'type'        => 'select',
				'options'     => [
					'==' => '==',
					'!=' => '!=',
					'>=' => '>=',
					'<=' => '<=',
					'>'  => '>',
					'<'  => '<',
				],
				'placeholder' => '==',
			],
			'value'   => [
				'type' => 'text',
			],
		];

		return $options;
	}

	public static function check_query_loop_index_condition( $render_set, $key, $condition ): bool {

		if ( $key !== 'loop_index' ) {

			return $render_set;
		}

		$current_loop_index = BricksQuery::get_loop_index();
		$value              = (int) ( $condition['value'] ?? '-1' );

		switch ( $condition['compare'] ?? '' ) {

			case '!=':
				$check = $current_loop_index !== $value;
				break;
			case '>=':

				$check = $current_loop_index >= $value;

				break;
			case '<=':
				$check = $current_loop_index <= $value;

				break;
			case '>':
				$check = $current_loop_index > $value;

				break;
			case '<':

				$check = $current_loop_index < $value;

				break;


			case '==':
			default:

				$check = $current_loop_index === $value;

				break;
		}

		return $check;
	}
}
