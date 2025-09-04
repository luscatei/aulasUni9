# Aula do dia 25/03/2025. O conteudi dessa aula é referente a movimentação basica e ataques do personagem

extends KinematicBody2D

var aceleracaoX = 450
var aceleracaoY = 50
var forca_pulo  = 1000
var velocidade  = Vector2.ZERO
var direcao     = -1
var animando    = false

func _ready():
	pass
	
func _process(delta):
	velocidade.x = 0
	velocidade.y += aceleracaoY
	
	if (Input.is_action_pressed("ui_left")):
		velocidade.x = -aceleracaoX
		direcao = -1
		$Sprite.flip_h = false
		
	elif (Input.is_action_pressed("ui_right")):
		velocidade.x = aceleracaoX
		direcao = 1
		$Sprite.flip_h = true
		
	if (is_on_floor() and not animando):
		if (velocidade.x == 0):
			$AnimationPlayer.play("respirando")
		else:
			$AnimationPlayer.play("andando")
			
	if (Input.is_action_just_pressed("ui_up") and is_on_floor()):
		velocidade.y = -forca_pulo
		$AnimationPlayer.play("pulando")
	
	if (Input.is_action_just_pressed("ui_accept")and is_on_floor() and not animando):
		$AnimationPlayer.play("atirando")
		animando = true
		
	if (Input.is_action_just_pressed("ui_down")):
		$AnimationPlayer.play("ataque")
		animando = true
		
		
		
	velocidade = move_and_slide(velocidade, Vector2.UP)
	
func atirar_flecha():
	var cena_flecha = preload("res://cena_flecha.tscn")
	var objeto_flecha = cena_flecha.instance()
	get_parent().add_child(objeto_flecha)
	objeto_flecha.global_position = $Position2D.global_position
	
	objeto_flecha.get_node("KinematicBody2D").direcao = direcao




func animacao_finalizada(anim_name):
	animando = false
