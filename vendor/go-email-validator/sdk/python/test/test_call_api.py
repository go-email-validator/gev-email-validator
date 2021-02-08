import os
import unittest
from pathlib import Path

from dotenv import load_dotenv

from openapi_client import Configuration, ApiClient
from openapi_client.api.email_validation_api import EmailValidationApi
from openapi_client.model.check_if_email_exist_result import CheckIfEmailExistResult


class TestCallApi(unittest.TestCase):
    """EmailRequestSmtp unit test stubs"""

    def setUp(self):
        load_dotenv(dotenv_path=Path('.') / '../../.env')
        self.api = EmailValidationApi(ApiClient(
            header_name="X-RapidApi-Key",
            header_value=os.environ["API_KEY"],
            configuration=Configuration(host=os.environ["HOST"]),
        ))

    def tearDown(self):
        pass

    def testGetCall(self):
        email = os.environ["EMAIL"]
        result = self.api.email_validation_single_validation_get(email=email)  # type: CheckIfEmailExistResult

        self.assertEqual(result["check_if_email_exist"]["input"], email)


if __name__ == '__main__':
    unittest.main()
