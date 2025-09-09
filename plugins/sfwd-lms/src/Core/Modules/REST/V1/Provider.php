<?php
/**
 * Provider for initializing the REST API subsystem.
 *
 * @since 4.25.0
 *
 * @package LearnDash\Core
 */

namespace LearnDash\Core\Modules\REST\V1;

use StellarWP\Learndash\lucatume\DI52\ServiceProvider;

/**
 * Provider for initializing the REST API subsystem.
 *
 * @since 4.25.0
 */
class Provider extends ServiceProvider {
	/**
	 * Registers the service provider bindings.
	 *
	 * @since 4.25.0
	 *
	 * @return void
	 */
	public function register(): void {
		$this->hooks();
	}

	/**
	 * Hooks wrapper.
	 *
	 * @since 4.25.0
	 *
	 * @return void
	 */
	public function hooks(): void {
		add_action(
			'rest_api_init',
			$this->container->callback( Controller::class, 'register_routes' )
		);
	}
}
