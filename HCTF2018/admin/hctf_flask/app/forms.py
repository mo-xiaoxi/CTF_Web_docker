from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, BooleanField, SubmitField
from wtforms.validators import DataRequired

class LoginForm(FlaskForm):
    username = StringField('Username', validators=[DataRequired()])
    password = PasswordField('Password', validators=[DataRequired()])
    remember_me = BooleanField('Remember Me')
    submit = SubmitField('login')


class RegisterForm(FlaskForm):
    username = StringField('Username', validators=[DataRequired()])
    password = PasswordField('Password', validators=[DataRequired()])
    verify_code = StringField('VerifyCode', validators=[DataRequired()])
    submit = SubmitField('register')

class NewpasswordForm(FlaskForm):
    password = PasswordField('Password', validators=[DataRequired()])
    newpassword = PasswordField('Password', validators=[DataRequired()])
    submit = SubmitField('change')