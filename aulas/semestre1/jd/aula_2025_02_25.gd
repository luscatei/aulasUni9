<!-- extends KinematicBody2D

var velocidade = 1000
var dir = 1 
var direcao = Vector2.ZERO



func _ready():
	
	global_position.x = get_viewport().size.x/2#33
	global_position.y = get_viewport().size.y/2#19
	

	
	direcao.y = -velocidade
	
func _process(_delta):
	
	var largura = get_viewport().size.x
	var altura = get_viewport().size.y
	
	
	if (dir == 1): #meio para cima
		if (global_position.y < 0):#Desce para o centro
			direcao.y = velocidade
			direcao.x = 0
			dir = 2
			
	if (dir == 2):
		if (global_position.y > altura/2):
			direcao.y = 0
			direcao.x = -velocidade
			dir = 3
			
	if (dir == 3):
		if (global_position.x < 0):
			direcao.y = 0
			direcao.x = velocidade
			dir = 4
			
	if (dir == 4):
		if (global_position.x > largura/2):
			direcao.x = 0
			direcao.y = velocidade
			dir = 5
			
	if (dir == 5):
		if (global_position.y > altura):
			direcao.y = -velocidade
			direcao.x = 0
			dir = 6
			
	if (dir == 6):
		if (global_position.y < altura/2):
			direcao.y = 0
			direcao.x = velocidade
			dir = 7
			
	if (dir == 7):
		if (global_position.x > largura):
			direcao.x = 0
			direcao.x = -velocidade
			dir = 8
			
	if (dir == 8):
		if (global_position.x < largura/2):
			direcao.x = 0
			direcao.y = -velocidade
			dir = 1
			
			
	move_and_slide(direcao) -->
