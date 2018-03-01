<?php

namespace AutovistaAppraisal;

interface IStorage
{
    /**
     * @return int
     */
    public function getAppraisalId();

    /**
     * @param int $appraisalId
     * @return \AutovistaAppraisal\IStorage
     */
    public function setAppraisalId($appraisalId);
}