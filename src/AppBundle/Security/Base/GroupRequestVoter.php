<?php

namespace AppBundle\Security\Base;

use AppBundle\Entity\Base\Audit;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use AppBundle\Entity\GroupRequest;

class BaseEntityVoter extends Voter
{
	const SHOW = 'show';
	const EDIT = 'edit';
	const DELETE = 'delete';

	protected function supports($attribute, $object)
	{
		if (!in_array($attribute, array(self::SHOW, self::EDIT, self::DELETE))) {
			return false;
		}

		if (!$object instanceof GroupRequest) {
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

		/** @var GroupRequest $entry */
		$entry = $object;

		switch($attribute) {
			case self::SHOW:
				return true;
			case self::EDIT:
			case self::DELETE:
				return $this->canEdit($entry, $user);
		}

		return false;
	}
	
	private function isLoggedIn($user) {
		return $user instanceof User;
	}

	private function canShow(GroupRequest $entry, User $user) {
		return $user->getId() === $entry->getSender()->getId() ||
			$user->getId() === $entry->getReceiver()->getId();
	}
	
	private function canEdit(Audit $entry, User $user) {
		return $user->getId() === $entry->getSender()->getId() ||
			$user->getId() === $entry->getReceiver()->getId();
	}
}