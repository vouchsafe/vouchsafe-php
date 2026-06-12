<?php

namespace Vouchsafe\OpenAPI\Model;

class RequestVerificationResponse
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
     * A unique URL to redirect the user to or embed in an iframe.
     *
     * @var string
     */
    protected $url;
    /**
     * A unique ID for the verification session, for you to track progress.
     *
     * @var string
     */
    protected $id;
    /**
     * The flow it belongs to.
     *
     * @var string
     */
    protected $flowId;
    /**
     * To be deprecated - use flow_id instead.
     *
     * @var string
     */
    protected $workflowId;
    /**
     * When the user will stop getting reminders.
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * A unique URL to redirect the user to or embed in an iframe.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * A unique URL to redirect the user to or embed in an iframe.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * A unique ID for the verification session, for you to track progress.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID for the verification session, for you to track progress.
     *
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
     * The flow it belongs to.
     *
     * @return string
     */
    public function getFlowId(): string
    {
        return $this->flowId;
    }
    /**
     * The flow it belongs to.
     *
     * @param string $flowId
     *
     * @return self
     */
    public function setFlowId(string $flowId): self
    {
        $this->initialized['flowId'] = true;
        $this->flowId = $flowId;
        return $this;
    }
    /**
     * To be deprecated - use flow_id instead.
     *
     * @return string
     */
    public function getWorkflowId(): string
    {
        return $this->workflowId;
    }
    /**
     * To be deprecated - use flow_id instead.
     *
     * @param string $workflowId
     *
     * @return self
     */
    public function setWorkflowId(string $workflowId): self
    {
        $this->initialized['workflowId'] = true;
        $this->workflowId = $workflowId;
        return $this;
    }
    /**
     * When the user will stop getting reminders.
     *
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
     * When the user will stop getting reminders.
     *
     * @param string $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(string $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
}