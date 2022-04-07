from odoo import api, fields, models

class SaleOrder(models.Model):
    _inherit = "hospital.patient"
    sale_description = fields.Char(string='Sale Description')
    
