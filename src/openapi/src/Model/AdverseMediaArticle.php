<?php

namespace Vouchsafe\OpenAPI\Model;

class AdverseMediaArticle
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
     * Headline of the news article
     *
     * @var string
     */
    protected $title;
    /**
     * URL to the original article
     *
     * @var string
     */
    protected $link;
    /**
     * Name of the publication
     *
     * @var string
     */
    protected $source;
    /**
     * Publication date as an ISO 8601 timestamp, or null if the date could not be determined
     *
     * @var string|null
     */
    protected $publishedAt;
    /**
     * Short excerpt from the article
     *
     * @var string
     */
    protected $snippet;
    /**
     * Adversity score (0–100) assigned by the screening model, adjusted for recency.
     * Higher scores indicate more serious adverse content.
     *
     * @var float
     */
    protected $score;
    /**
     * Headline of the news article
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Headline of the news article
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * URL to the original article
     *
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }
    /**
     * URL to the original article
     *
     * @param string $link
     *
     * @return self
     */
    public function setLink(string $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;
        return $this;
    }
    /**
     * Name of the publication
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
     * Name of the publication
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * Publication date as an ISO 8601 timestamp, or null if the date could not be determined
     *
     * @return string|null
     */
    public function getPublishedAt(): ?string
    {
        return $this->publishedAt;
    }
    /**
     * Publication date as an ISO 8601 timestamp, or null if the date could not be determined
     *
     * @param string|null $publishedAt
     *
     * @return self
     */
    public function setPublishedAt(?string $publishedAt): self
    {
        $this->initialized['publishedAt'] = true;
        $this->publishedAt = $publishedAt;
        return $this;
    }
    /**
     * Short excerpt from the article
     *
     * @return string
     */
    public function getSnippet(): string
    {
        return $this->snippet;
    }
    /**
     * Short excerpt from the article
     *
     * @param string $snippet
     *
     * @return self
     */
    public function setSnippet(string $snippet): self
    {
        $this->initialized['snippet'] = true;
        $this->snippet = $snippet;
        return $this;
    }
    /**
     * Adversity score (0–100) assigned by the screening model, adjusted for recency.
     * Higher scores indicate more serious adverse content.
     *
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
    * Adversity score (0–100) assigned by the screening model, adjusted for recency.
    Higher scores indicate more serious adverse content.
    *
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