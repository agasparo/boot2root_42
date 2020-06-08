#!/usr/bin/python3

import sys
import turtle
import os


if __name__ == '__main__':
	turtle.setup()
	turtle.position()

	filename = "./turtle.txt"
	# Open the file as f.
	# The function readlines() reads the file.
	with open(filename) as f:
	    content = f.readlines()

	# Show the file contents line by line.
	# We added the comma to print single newlines and not double newlines.
	# This is because the lines contain the newline character '\n'.
	for line in content:
	    lines = line.split(' ');
	    if (lines[0] == "Recule") :
	    	turtle.backward(float(lines[1]));
	    if (lines[0] == "Tourne") :
	    	if (lines[1] == "gauche") :
	    		turtle.left(float(lines[3]));
	    	if (lines[1] == "droite") :
	    		turtle.right(float(lines[3]));
	    if (lines[0] == "Avance") :
	    	turtle.forward(float(lines[1]));
	turtle.exitonclick()