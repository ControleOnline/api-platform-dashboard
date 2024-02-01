<?php

namespace ControleOnline\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     itemOperations={
 *         "post"={
 *             "path"="/dashboard/main.{_format}",
 *             "status"=202,
 *             "security"="is_granted('ROLE_CLIENT')",
 *         },
 *     },
 *     formats={"jsonld", "json", "html", "jsonhal", "csv"={"text/csv"}},
 * )
 */
final class MainDashboard
{
    /**
     * @Assert\NotBlank
     * @Assert\Regex(
     *     pattern="/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/",
     *     match  =true,
     *     message="Date from is not valid"
     * )
     */
    public $fromDate;
    /**
     * @Assert\NotBlank
     * @Assert\Regex(
     *     pattern="/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/",
     *     match  =true,
     *     message="Date to is not valid"
     * )
     */
    public $toDate;
    /**
     * @Assert\NotBlank
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     match  =true,
     *     message="Provider Id is not valid"
     * )
     */
    public $providerId;
}
