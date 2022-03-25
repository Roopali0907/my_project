#mainfest file including all the file path here in Data 
{
    'name' : 'Vaccine',
    'version' : '1.0',
    'summary': 'Vaccine covid tracker information',
    'sequence': 10,
    'description':"""Vaccine information and covid vaccine information tracker""" ,
    'category': 'Productivity',
    'website': 'https://www.odoomates.tech',
    'images' : [],
    'data': [
        'security/ir.model.access.csv',
        'data/cron_job.xml',
        'views/vaccine.xml',
        'report/covid_vaccine.xml',
        'report/report.xml'
        
    ],
    'demo': [],
    'qweb': [],
    'installable': True,
    'application': True,
    'auto_install': False,
}
