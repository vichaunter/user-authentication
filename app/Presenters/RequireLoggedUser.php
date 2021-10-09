<?php

declare(strict_types=1);

namespace App\Presenters;


trait RequireLoggedUser
{
	public function injectRequireLoggedUser(): void
	{
		$this->onStartup[] = function () {
			if (!$this->getUser()->isLoggedIn()) {
				$this->redirect('Sign:in', $this->storeRequest());
			}
		};
	}
}
