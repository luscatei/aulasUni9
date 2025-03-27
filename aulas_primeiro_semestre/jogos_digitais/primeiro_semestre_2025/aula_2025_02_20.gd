#extends KinematicBody2D
#
#var velocidade = 200
#var direcao = Vector2.ZERO
#
#var minha_direcao = 1
#
#func _ready():
#	direcao.y = velocidade
#	direcao.x = velocidade
#
#func _process(delta):
#
#	var largura_tela = get_viewport().size.x
#	var altura_tela = get_viewport().size.y
#
#
#	if(minha_direcao==1):
#		direcao.y = velocidade
#		if(global_position.y > altura_tela/2):
#			direcao.y = 0
#			minha_direcao = 2
#
#	elif(minha_direcao==2):
#		direcao.x = velocidade
#		if(global_position.y > 42):
#			direcao.y = -velocidade
#			minha_direcao = 3
#
#	elif(minha_direcao==3):
#		direcao.x = velocidade
#		if(global_position.x > 42):
#			direcao.y = 0
#			minha_direcao = 4
#
#	elif(minha_direcao==4):
#		direcao.x = velocidade
#		if(global_position.y > 42):
#			direcao.y = -velocidade
#			minha_direcao = 5
#
#
##	if(global_position.y > 580):
##		direcao.y -=velocidade
##
##	elif(global_position.x > 990):
##		direcao.x -=velocidade
##
##	elif(global_position.y < 34):
##		direcao.y += velocidade
##
##	elif(global_position.x < 0):
##		direcao.x += velocidade
#
##	if(global_position.y!=altura_tela/2):
##		if(global_position.y > altura_tela - 34):
##			direcao.y -= velocidade
##		elif(global_position.y < 34):
##			direcao.y = velocidade
##
##	elif(global_position.x > largura_tela - 34):
##		direcao.x -= velocidade
##
##	elif(global_position.x < 34):
##		direcao.x = velocidade
##
##
#	move_and_slide(direcao)










extends KinematicBody2D
 
var velocidade = 320
var direcao = Vector2.ZERO
 
var minha_direcao = 1
 
func _ready():
	direcao.y = velocidade
 
func _process(delta):
	
	var largura_tela = get_viewport().size.x
	var altura_tela  = get_viewport().size.y
	
	if (minha_direcao==1):
		direcao.y = velocidade
		if (global_position.y > altura_tela/2):
			direcao.y = 0 
			minha_direcao = 2
			
	elif (minha_direcao==2):
		direcao.x = -velocidade
		if (global_position.x < 42):
			direcao.x = -velocidade 
			minha_direcao = 3
			
	elif (minha_direcao==3):
		direcao.x = velocidade
		if (global_position.x > largura_tela/2):
			direcao.x = 0
			direcao.y = velocidade 
			minha_direcao = 4
	
	elif (minha_direcao==4):
		direcao.y = velocidade
		if (global_position.y > altura_tela):
			direcao.y = -velocidade 
			direcao.x = 0 
			minha_direcao = 5
			
	elif (minha_direcao==5):
		direcao.y = -velocidade
		if (global_position.y < altura_tela/2):
			direcao.y = 0
			direcao.x = velocidade
			minha_direcao = 6
			
	elif (minha_direcao==6):
		direcao.x = velocidade
		if (global_position.x > largura_tela):
			direcao.x = -velocidade
			minha_direcao = 7
	
	elif (minha_direcao==7):
		direcao.x = -velocidade
		if (global_position.x < largura_tela/2):
			direcao.x = 0
			direcao.y = -velocidade
			minha_direcao = 8
			
	elif (minha_direcao==8):
		direcao.y = -velocidade
		if (global_position.y < 0):
			minha_direcao = 1
		
			
			
			
			
			
			
			
			
#			direcao.x = 0
#			direcao.y = 0
#			minha_direcao == 2
	
#	elif (minha_direcao==9):
#		direcao.y = velocidade
#		if (global_position.y < altura_tela):
#			direcao.y = 0 
#			minha_direcao = 2
#
	
	
	
			
			
		
	move_and_slide(direcao)
