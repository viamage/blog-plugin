<?php
/**
 * Copyright (c) 2018 Viamage Limited
 * All Rights Reserved
 *
 *  NOTICE:  All information contained herein is, and remains
 *  the property of Viamage Limited and its suppliers, if any.
 *  The intellectual and technical concepts contained herein
 *  are proprietary to Viamage Limited and its suppliers and are
 *  protected by trade secret or copyright law, if not specified otherwise.
 *  Dissemination of this information or reproduction of this material
 *  is strictly forbidden unless prior written permission is obtained
 *  from Viamage Limited.
 *
 */

/**
 * Created by PhpStorm.
 * User: jin
 * Date: 3/28/18
 * Time: 6:38 PM
 */

namespace RainLab\Blog\ValueObjects;

class PostFilters
{
    public $sort = 'published_at';
    public $sortType = 'desc';
    public $perPage = 12;
    public $search;
    public $category;
    public $published = true;
}