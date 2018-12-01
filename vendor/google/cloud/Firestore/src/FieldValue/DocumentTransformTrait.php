<?php
/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Firestore\FieldValue;

use Google\Cloud\Firestore\FieldPath;

/**
 * Common methods for DocumentTransforms.
 */
trait DocumentTransformTrait
{
    use FieldValueTrait;

    /**
     * @var array
     */
    private $args;

    /**
     * @param array $args
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;
    }

    /**
     * Get the field value arguments.
     *
     * @access private
     * @return array
     */
    public function args()
    {
        return $this->args;
    }
}
