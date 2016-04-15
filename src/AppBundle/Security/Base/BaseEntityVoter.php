<?php

namespace AppBundle\Security\Base;

use AppBundle\Entity\Base\Audit;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class BaseEntityVoter extends Voter
{
	const EDIT = 'edit';
	const DELETE = 'delete';

	protected function supports($attribute, $object)
	{
		if (!in_array($attribute, array(self::EDIT, self::DELETE))) {
			return false;
		}

		if (!$object instanceof Audit) {
			return false;
		}

		return true;
	}

	protected function voteOnAttribute($attribute, $object, TokenInterface $token)
	{
		$user = $token->getUser();

		if(!self::isLoggedIn($user)) {
			return false;
		}

		/** @var Audit $entry */
		$entry = $object;

		switch($attribute) {
			case self::EDIT:
			case self::DELETE:
				return $this->canEdit($entry, $user);
		}

		return false;
	}
	
	private function isLoggedIn($user) {
		return $user instanceof User;
	}

	private function canEdit(Audit $entry, User $user) {
		return $user->getId() === $entry->getCreatedBy()->getId();
	}
}