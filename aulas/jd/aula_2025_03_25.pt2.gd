extends KinematicBody2D

var aceleracaoX = 900
var direcao = -1
var velocidade = Vector2.ZERO


func _ready():
	pass

func _process(delta):
	velocidade.x = direcao * aceleracaoX
	if (direcao == 1):
		$Sprite.flip_h = true
	move_and_slide(velocidade)
