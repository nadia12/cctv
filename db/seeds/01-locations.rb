module SeedLocation
	def self.seed
	location_list = ["Hospital","Room 1","Room 2","Room 3", "Service Center","Kitchen"]

		location_list.each do |loc|
		  Location.create( :name => loc )
		end
	end
end