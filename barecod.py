import code128
import uuid
import time




def executeSomething():
    def my_random_string(string_length=10):
        random = str(uuid.uuid4()) # Convert UUID format to a Python string.
        random = random.upper() # Make all characters uppercase.
        random = random.replace("-","") # Remove the UUID '-'.
        return random[0:string_length] # Return the random string.

    print(my_random_string(8)) # For example, D9E50C
    code128.image(my_random_string(8)).save("1.png")  # with PIL present
    time.sleep(4)

while True:
    executeSomething()


