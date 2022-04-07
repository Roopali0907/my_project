from logging import PlaceHolder
from multiprocessing.sharedctypes import Value
import string
from odoo import api, fields, models
import requests
from datetime import datetime
import json
import logging
from odoo.exceptions import MissingError
from odoo.exceptions import ValidationError
from odoo.tools.misc import format_date

#vaccine info Code
_logger = logging.getLogger(__name__)

class VaccineInformation(models.Model):
    _name = "covid.vaccine"
    _description = "vaccine_information_tracker"

    #basic fields in odoo
    developer_researcher = fields.Char(string='developerResearcher', required=True)
    trimedName= fields.Char(string='trimedName', required=True)
    Category= fields.Char(string='category')
    trimed_Category= fields.Char(string='trimedCategory')
    phase= fields.Char(string='Phase')
    nextsteps= fields.Char(string='nextSteps')
    desc= fields.Char(string='description')
    Funder= fields.Char(string='funder')
    Approve= fields.Char(string='FDAApproved')
    format_data= fields.Datetime(string='lastUpdated')

    # time_data="2021-12-09T00:00:00.000Z"

    # Data Pulled from API
    @api.model
    def test_cron_job(self):  
        try:
            url = "https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/vaccines/get-all-vaccines"

            headers = {
                'x-rapidapi-host': "vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com",
                'x-rapidapi-key': "9313f550ccmsh00e6db0b11634c9p183316jsn1bd899557aac"
                }

            response = requests.request("GET", url, headers=headers)

            #pyhton to json converted Data
            # print(response.text)
            source =response.text
            data =json.loads(source)
            for i in range(0,356):

                developerResearcher=data[i]["developerResearcher"]
                trimedName=data[i]["trimedName"]
                Category =data[i]["category"]
                trimed_Category =data[i]["trimedCategory"]
                phase =data[i]["phase"]
                nextsteps =data[i]["nextSteps"]
                desc =data[i]["description"]
                Funder =data[i]["funder"]
                FDAApproved =data[i]["FDAApproved"]
                time_data = data[i]["lastUpdated"] 
            # DateTime using Conversion UTC to normal form by replacing T  and Z
                time_data="2021-12-09T00:00:00.000Z"
                format_data = "%Y-%m-%dT%H:%M:%S.%fz"
                date = datetime.strptime(time_data, format_data)
                # t=str(date)
                
                #fetching data from API
                self.create({
                    'developer_researcher':developerResearcher,
                    'trimedName': trimedName,
                    'Category': Category,
                    'trimed_Category': trimed_Category,
                    'phase': phase,
                    'nextsteps': nextsteps,
                    'desc': desc,
                    'Funder': Funder,
                    'Approve': FDAApproved,
                    'format_data': date     #t
                })
            #using logger they provide a cron job information
            _logger.info(
              '"Vaccine information data fetched successfully from API !!" Cron job fetch the data on timely basis in executed successfully.')
        
        except:
            #terminal error
            _logger.error(
                "Can not fetch Vaccine information data from API. Something incorrect please checkout.")
            raise ValidationError(
                "Unable to fetch data from API checkout API key and Internet connection For fetching the data from API.")
                    






    


