<?php

namespace Vouchsafe\OpenAPI\Model;

class AlertMatchResponse
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $opensanctionsId;
    /**
     * @var string
     */
    protected $caption;
    /**
     * @var string
     */
    protected $entityType;
    /**
     * @var list<string>
     */
    protected $datasets;
    /**
     * @var float
     */
    protected $score;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getOpensanctionsId(): string
    {
        return $this->opensanctionsId;
    }
    /**
     * @param string $opensanctionsId
     *
     * @return self
     */
    public function setOpensanctionsId(string $opensanctionsId): self
    {
        $this->initialized['opensanctionsId'] = true;
        $this->opensanctionsId = $opensanctionsId;
        return $this;
    }
    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }
    /**
     * @param string $caption
     *
     * @return self
     */
    public function setCaption(string $caption): self
    {
        $this->initialized['caption'] = true;
        $this->caption = $caption;
        return $this;
    }
    /**
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }
    /**
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }
    /**
     * @param list<string> $datasets
     *
     * @return self
     */
    public function setDatasets(array $datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;
        return $this;
    }
    /**
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
}