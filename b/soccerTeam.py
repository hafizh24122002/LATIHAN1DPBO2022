class soccerTeam():
	__name = ""
	__nation = ""
	__year_founded = 0
	__player = []

	def __init__(self, name="", nation="", year_founded=0, player=[]):
		self.__name = name
		self.__nation = nation
		self.__year_founded = year_founded
		self.__player = player

	def setName(self, name):
		self.__name = name

	def getName(self):
		return self.__name

	def setNation(self, nation):
		self.__nation = nation

	def getNation(self):
		return self.__nation

	def setYear_founded(self, year_founded):
		self.__year_founded = year_founded

	def getYear_founded(self):
		return self.__year_founded

	def setPlayer(self, player):
		self.__player = player

	def getPlayer(self):
		return self.__player

	def printTeam(self):
		print("\nNama tim : ", self.__name)
		print("Negara asal tim : ", self.__nation)
		print("Tahun berdiri ", self.__year_founded)
		print("Pemain :")
		for i in self.__player:
			print(" -> ", i)