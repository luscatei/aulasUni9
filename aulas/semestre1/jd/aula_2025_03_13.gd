# Essa aula é para o jogo de plataforma 2D, onde o personagem pode atirar. Foi passada no dia 13/03/2025 pelo professor Leandro Mota.

# extends KinematicBody2D

# var velocidade = 250
# var aceleracao_gravidade = 9.8*2
# var forca_pulo = 450
# var direcao = Vector2.ZERO

	

# func _ready():
# 	pass 
	
	
# func _process(_delta):

# 	if (Input.is_action_just_pressed("ui_accept")):
# #		get_node("AnimationPlayer").play("disparando")
# 		$AnimationPlayer.play("disparando")
# 		_disparar()


# func _disparar():

# 	var cena_disparo = preload("res://cena_disparo.tscn")
# 	var obj_disparo = cena_disparo.instance()
# 	add_child(obj_disparo)
# 	obj_disparo.global_position = $Position2D.global_position

# func _andando():

# 	if(Input.is_action_pressed("ui_right")):
# 		direcao.x = velocidade

# 	move_and_slide(direcao)