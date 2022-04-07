from odoo import api, fields, models

class HospitalPatient(models.Model):
    _name = "hospital.patient"
    _inherit = ["mail.thread","mail.activity.mixin"]
    _description = "Hospital_patient"

    name = fields.Char(string='Name', required=True)
    age = fields.Integer(string='Age')
    gender = fields.Selection([
            ('male','Male'),
            ('female','Female'),
            ('other','other')
            ], required=True , default='male')
    note = fields.Text(string='Description')
    state = fields.Selection([('draft','Draft'),('confirm','Confirmed'),('done','Done'),('cancel','Cancelled')],string="status")

#     responsible_id = fields.Many2one('res_partner',string="Responsible")
    
    def action_draft(self):
            self.state = 'draft'
    def action_confrim(self):
            self.state = 'confirm'
    def action_done(self):
            self.state = 'done'
    
    def action_cancel(self):
            self.state = 'cancel'

