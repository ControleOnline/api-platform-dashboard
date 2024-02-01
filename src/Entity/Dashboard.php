<?php

namespace ControleOnline\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={
 *         "post"={
 *             "path"="/dashboard",
 *             "status"=202,
 *             "security"="is_granted('ROLE_CLIENT')",
 *             "messenger"=true,
 *             "denormalization_context"={
 *                 "groups"={"dashboard_read"}
 *             },
 *             "normalization_context"={
 *                 "groups"={"dashboard_write"}
 *             }
 *         },
 *         "post"={
 *             "path"="/dashboard/financial",
 *             "status"=202,
 *             "security"="is_granted('ROLE_CLIENT')",
 *             "messenger"=true,
 *             "denormalization_context"={
 *                 "groups"={"dashboard_read"}
 *             },
 *             "normalization_context"={
 *                 "groups"={"dashboard_write"}
 *             }
 *         }
 *     }
 * )
 */
final class Dashboard
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
