package anna.howtocelebratechristmas;


import android.support.v4.view.ViewPager;
import android.support.v7.widget.RecyclerView;
import android.text.SpannableString;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

public class Decorations_Adapter extends RecyclerTabLayout.Adapter<Decorations_Adapter.ViewHolder>{


    private Decorations_Pager_Adapter mAdapater;


    public Decorations_Adapter(ViewPager viewPager) {
        super(viewPager);
        mAdapater = (Decorations_Pager_Adapter) mViewPager.getAdapter();
    }

    @Override
    public ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.tab_decorations, parent, false);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(ViewHolder holder, int position) {
        Information information = mAdapater.getItem(position);
        holder.title.setText(information.name);
        holder.color.setBackgroundColor(information.color);

        SpannableString name = new SpannableString(information.name);
        holder.title.setText(name);
    }

    @Override
    public int getItemCount() {
        return mAdapater.getCount();
    }

    public class ViewHolder extends RecyclerView.ViewHolder {

        public View color;
        public TextView title;

        public ViewHolder(View itemView) {
            super(itemView);

            title = (TextView) itemView.findViewById(R.id.title);
            color = itemView.findViewById(R.id.color);

            itemView.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    getViewPager().setCurrentItem(getAdapterPosition());
                }
            });
        }
    }

}
