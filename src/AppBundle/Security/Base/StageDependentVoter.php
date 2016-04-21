<?php

namespace AppBundle\Security\Base;

use AppBundle\Entity\Dependent\StageDependent;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class StageDependentVoter extends Voter
{
	const SHOW = 'show';

	protected function supports($attribute, $object)
	{
		if (!in_array($attribute, array(self::SHOW))) {
			return false;
		}

		if (!$object instanceof StageDependent) {
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
		
		/** @var StageDependent $entry */
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

	private function canShow(StageDependent $entry, User $user) {
		$userGroup = $user->getGroup();
		
		if(!$userGroup) return false;
		
		$userStage = $userGroup->getStage();
		$entryStage = $entry->getStage();
		
		return $userStage && $entryStage && $userStage->getNumber() >= $entryStage->getNumber();
	}
}