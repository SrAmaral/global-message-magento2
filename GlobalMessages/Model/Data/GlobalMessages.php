<?php

namespace Webjump\GlobalMessages\Model\Data;

use Magento\Framework\DataObject;
use Webjump\GlobalMessages\Api\Data\GlobalMessagesInterface;

class GlobalMessages extends DataObject implements GlobalMessagesInterface
{
    /**
     * Getter for EntityId.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->getData(self::ENTITY_ID) === null ? null
            : (int)$this->getData(self::ENTITY_ID);
    }

    /**
     * Setter for EntityId.
     *
     * @param int|null $entityId
     *
     * @return void
     */
    public function setEntityId(?int $entityId): void
    {
        $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Getter for Message.
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->getData(self::MESSAGE);
    }

    /**
     * Setter for Message.
     *
     * @param string|null $message
     *
     * @return void
     */
    public function setMessage(?string $message): void
    {
        $this->setData(self::MESSAGE, $message);
    }

    /**
     * Getter for ColorText.
     *
     * @return string|null
     */
    public function getColorText(): ?string
    {
        return $this->getData(self::COLOR_TEXT);
    }

    /**
     * Setter for ColorText.
     *
     * @param string|null $colorText
     *
     * @return void
     */
    public function setColorText(?string $colorText): void
    {
        $this->setData(self::COLOR_TEXT, $colorText);
    }

    /**
     * Getter for ColorBackground.
     *
     * @return string|null
     */
    public function getColorBackground(): ?string
    {
        return $this->getData(self::COLOR_BACKGROUND);
    }

    /**
     * Setter for ColorBackground.
     *
     * @param string|null $colorBackground
     *
     * @return void
     */
    public function setColorBackground(?string $colorBackground): void
    {
        $this->setData(self::COLOR_BACKGROUND, $colorBackground);
    }

    /**
     * Getter for UpdatedAt.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Setter for UpdatedAt.
     *
     * @param string|null $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * Getter for IsActive.
     *
     * @return bool|null
     */
    public function getIsActive(): ?int
    {
        return $this->getData(self::IS_ACTIVE) === null ? null
            : (int)$this->getData(self::IS_ACTIVE);
    }

    /**
     * Setter for IsActive.
     *
     * @param bool|null $isActive
     *
     * @return void
     */
    public function setIsActive(?int $isActive): void
    {
        $this->setData(self::IS_ACTIVE, $isActive);
    }
}
