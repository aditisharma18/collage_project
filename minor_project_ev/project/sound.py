import time
import threading
import os
from pydub import AudioSegment
from pydub.playback import play
def song():
    wav_file = AudioSegment.from_file(file = "song.wav", format="wav")
    print("plying")
    play(wav_file)
def clear():
    os.system('cls')
def resonator():
     while True:
         print(".......")
         clear()

if __name__ == "__main__":

    t1 = threading.Thread(target = song)
    t2 = threading.Thread(target = resonator)

    t1.start()
    t2.start()

    t1.join()
    t2.join()
    


