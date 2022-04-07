from odoo import api, fields, models

class VaccineInformation(models.Model):
    _name = "covid.vac"
    _description = "vaccine Information"

    name = fields.Char(string='Name', required=True)
    age = fields.Integer(string='Age')
    gender = fields.Selection([
            ('male','Male'),
            ('female','Female'),
            ('other','other')
            ], required=True , default='male')
    note = fields.Text(string='Description')
    