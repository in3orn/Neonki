<?php

namespace AppBundle\Security\Base;

use AppBundle\Entity\Dependent\GroupDependent;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class GroupDependentVoter extends Voter
{
	const SHOW = 'show';

	protected function supports($attribute, $object)
	{
		if (!in_array($attribute, array(self::SHOW))) {
			return false;
		}

		if (!$object instanceof GroupDependent) {
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

		/** @var GroupDependent $entry */
		$entry = $object;

		switch($attribute) {
			case self::SHOW:
				return $this->canShow($entry, $user);
		}

		return false;
	}
	
	private function isLoggedIn($user) {
		return $user instanceof User;
	}

	private function canShow(GroupDependent $entry, User $user) {
		$userGroup = $user->getGroup();
		$entryGroup = $entry->getGroup();
		
		while ($userGroup) {
			if($userGroup->getId() === $entryGroup->getId()) {
				return true;
			}
			
			$userGroup = $userGroup->getParent();
		}
		
		return false;
	}
}