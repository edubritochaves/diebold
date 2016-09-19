# coding: utf-8

"""
    SERVCore NG

    No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

    OpenAPI spec version: 4.1
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
"""

from __future__ import absolute_import

# import models into sdk package
from .models.data_out import DataOut
from .models.message import Message
from .models.model_in import ModelIn
from .models.out import Out
from .models.output_data import OutputData
from .models.queue import Queue

# import apis into sdk package
from .apis.queue_api import QueueApi

# import ApiClient
from .api_client import ApiClient

from .configuration import Configuration

configuration = Configuration()
