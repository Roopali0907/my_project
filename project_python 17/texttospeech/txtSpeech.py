import imp
from gtts import gTTS
import os

mytxt = "I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best."

language = 'en'

output = gTTS(text=mytxt,lang=language, slow=False)

output.save("output.mp3")
os.system("start output.mp3")