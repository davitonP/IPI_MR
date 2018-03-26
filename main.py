from flask import Flask
from flask import render_template
import os

PEOPLE_FOLDER = os.path.join('static', 'movies')
app = Flask(__name__)


app.config['UPLOAD_FOLDER'] = PEOPLE_FOLDER

@app.route('/')
def index():
    return render_template('login.html')

@app.route('/welcome')
def wel():
    full_filename = os.path.join(app.config['UPLOAD_FOLDER'], 'Terror/laformadelagua.jpg')
    return render_template('movie.html',img = full_filename)


app.run(debug=True)
