# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import synthtool as s
import synthtool.gcp as gcp
import logging

logging.basicConfig(level=logging.DEBUG)

gapic = gcp.GAPICGenerator()
common_templates = gcp.CommonTemplates()

# tasks has two product names, and a poorly named artman yaml
v1beta1_library = gapic._generate_code(
    'asset', 'v1beta1', 'php',
    config_path='artman_cloudasset_v1beta1.yaml',
    artman_output_name='google-cloud-asset-v1beta1')

templates = common_templates.php_library()

s.copy(v1beta1_library / f'src/')
s.copy(v1beta1_library / f'proto/src/GPBMetadata/Google/Cloud/Asset', f'metadata')
s.copy(v1beta1_library / f'proto/src/Google/Cloud/Asset', f'src')
s.copy(v1beta1_library / f'tests')

s.copy(templates)
