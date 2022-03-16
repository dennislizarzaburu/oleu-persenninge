<?php

namespace App\EventSubscriber;

use App\Entity\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminAdminSubscriber implements EventSubscriberInterface
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setPassword'],
            BeforeEntityUpdatedEvent::class => ['updatePassword'],
        ];
    }

    public function setPassword(BeforeEntityPersistedEvent $event) {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Admin)) {
            return;
        }

        $this->encodePassword($entity);
    }

    public function updatePassword(BeforeEntityUpdatedEvent $event) {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Admin)) {
            return;
        }

        $this->encodePassword($entity);
    }

    public function encodePassword(Admin $entity)
    {
        if ($entity->getPlainPassword()) {
            $hashedPassword = $this->passwordHasher->hashPassword(
                $entity,
                $entity->getPlainPassword()
            );
            $entity->setPassword($hashedPassword);
        }
    }
}
