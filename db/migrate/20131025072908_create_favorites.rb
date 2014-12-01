class CreateFavorites < ActiveRecord::Migration
  def change
    create_table :favorites do |t|
      t.integer :channel_id
      t.integer :user_id
      t.string :status

      t.timestamps
    end
  end
end
