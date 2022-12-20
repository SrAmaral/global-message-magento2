<?php

namespace Webjump\GlobalMessages\Api\Data;

interface GlobalMessagesInterface
{
    /**
     * String constants for property names
     */
    const ENTITY_ID = "entity_id";
    const MESSAGE = "message";
    const COLOR_TEXT = "color_text";
    const COLOR_BACKGROUND = "color_background";
    const UPDATED_AT = "updated_at";
    const IS_ACTIVE = "is_active";

    /**
     * Getter for EntityId.
     *
     * @return int|null
     */
    public function getEntityId(): ?int;

    /**
     * Setter for EntityId.
     *
     * @param int|null $entityId
     *
     * @return void
     */
    public function setEntityId(?int $entityId): void;

    /**
     * Getter for Message.
     *
     * @return string|null
     */
    public function getMessage(): ?string;

    /**
     * Setter for Message.
     *
     * @param string|null $message
     *
     * @return void
     */
    public function setMessage(?string $message): void;

    /**
     * Getter for ColorText.
     *
     * @return string|null
     */
    public function getColorText(): ?string;

    /**
     * Setter for ColorText.
     *
     * @param string|null $colorText
     *
     * @return void
     */
    public function setColorText(?string $colorText): void;

    /**
     * Getter for ColorBackground.
     *
     * @return string|null
     */
    public function getColorBackground(): ?string;

    /**
     * Setter for ColorBackground.
     *
     * @param string|null $colorBackground
     *
     * @return void
     */
    public function setColorBackground(?string $colorBackground): void;

    /**
     * Getter for UpdatedAt.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Setter for UpdatedAt.
     *
     * @param string|null $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(?string $updatedAt): void;

    /**
     * Getter for IsActive.
     *
     * @return bool|null
     */
    public function getIsActive(): ?int;

    /**
     * Setter for IsActive.
     *
     * @param bool|null $isActive
     *
     * @return void
     */
    public function setIsActive(?int $isActive): void;
}
