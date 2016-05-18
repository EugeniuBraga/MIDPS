#!/bin/bash

	echo -e "\n|--------C-------------|"
	cd c
	gcc  hello.c
	./a.out
	cd ..

	echo -e "\n|--------C++-----------|"
	cd cpp
	g++ hello.cpp
	./a.out
	cd ..

	echo -e "\n|--------JAVA----------|"
	cd java
	javac hello.java
	java HelloWorld
	cd .. 

	echo -e "\n|--------Python--------|"
	cd python
	python hello.py
	cd ..

	echo -e "\n|--------Ruby----------|"
	cd ruby
	ruby hello.rb
	


