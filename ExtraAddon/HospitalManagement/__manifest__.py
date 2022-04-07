{
    'name' : 'Hospital Management',
    'version' : '1.0',
    'summary': 'Hospital managemnet software',
    'sequence': 10,
    'description':"""Hospital management software""" ,
    'category': 'Productivity',
    'website': 'https://www.odoomates.tech',
    'images' : [],
    'depends' : [
        'mail',
        'sale'
        
        ],
    'data': [
        'security/ir.model.access.csv',
        'views/patient.xml'
        
        
    ],
    'demo': [],
    'qweb': [],
    'installable': True,
    'application': True,
    'auto_install': False,
}
